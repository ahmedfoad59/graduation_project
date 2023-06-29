<?php

namespace App\Http\Controllers\Api\Client;

use App\CustomClass\response;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Contracts\Validation\Validator;

use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Validation\Rule;
use App\Models\ClientVerifyEmail;
use App\Mail\VerifyEmail;
use App\Jobs\sendMail;

use Illuminate\Support\Facades\Mail;

class registerController extends Controller 
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name'                 => 'required|string|max:255|unique:clients,name',
            'email'                => 'required|email|max:255|unique:clients,email' ,
            'phone'                => "required|string|unique:clients,phone",
            'avatar'               => 'nullable|image',
            'password'             => 'required|confirmed|min:6|max:255',
            'password_confirmation'=> "required|string|same:password",
            'country_id'           => 'required|exists:countries,id',
            'brand_id'             => "required",
        ]);
        if($validator->fails()){
            return response()->json([
                "status" => false,
                'errors'=> $validator->errors(),
            ], 402);
        }

        if(!empty(Client::where('device_serial',$request->device_serial)->first()))
        {
            return response()->json([
                "status" => false,
                'message'=> __('site.You Have Account Upgrade It'),
            ], 404);
        }
        $client = Client::create([
              
            'name'                     => $request->get('name'),
            'email'                     => $request->get('email'),
            'phone'                     => $request->get('phone'),
            'password'                  => Hash::make($request->get('password')),
            'avatar'                     => $request->get('avatar'),
            'country_id'                => $request->get('country_id'),
            'brand_id'                  => $request->get('brand_id'),

        ]);


        if($request->has('device_token')){
            $client->device_token   = $request->device_token;
        }
        if($request->has('device_serial')){
            $client->device_serial   = $request->device_serial;
        }
        if($request->has('avatar') && $request->avatar != null)
        {
            $path = rand(0,1000000) . time() . '.' . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move(base_path('public/uploads/client') , $path);
            $client->avatar   = $path;
        }
        $client->save();

        // $token = JWTAuth::fromUser($bidder);
        //send cerify email
            $token=$this->createToken(new ClientVerifyEmail());
            $verifies=ClientVerifyEmail::where('email',$client->email)->delete();
            ClientVerifyEmail::create([
                'email'=>$client->email,
                'token' =>$token,
            ]);
        //    $details['name']=$client->name;
        //    $details['email']=$client->email;
        //    $details['token']=$token;
            // dispatch(new sendMail($details));
            // if (dispatch(new sendMail($client->name,$client->email,$token) )) {
            //     return response()->json([
            //         "status" => true,
            //         'message'=> __('site.Check Your Mail To Verify Your Account'),
            //     ], 200);
            // }
            // Mail::to($client->email)->send(new VerifyEmail($client->name,$token));
        //end send verify email
        return response()->json([
            "status" => true,
            'message'=> __('site.Check Your Mail To Verify Your Account'),
        ], 200);
    }
     public function VerifyAccount(Request $request)
     {
         $validator=Validator::make($request->all(),[
             'token' =>'required|exists:client_verify_emails,token',
         ]);
         if($validator->fails())
         {
             return response()->json([
                 'status'=>false,
                 'message'=>$validator->errors(),
             ]);
         }
         $codeRow=ClientVerifyEmail::where('token', $request->token)->first();
         if(empty($codeRow)){
             return response()->json([
                 'status'=>false,
                 'message'=>__('site.Please Write The Right Code'),
             ]);
         }
         $client=Client::where('email', $codeRow->email)->first();
         if(empty($client)){
             return response()->json([
                 'status'=>false,
                 'message'=>__('site.Please Write The Right Code'),
             ]);
         }

         $codeRow->delete();
         $client->verified_email=true;
         $client->save();
         $token = JWTAuth::fromUser($client);
         return response()->json([
            "status" => true,
            'message'=> __('site.Your Account Successfully Register'),
            'client'   =>new ClientResource($client),
            'token'  => $token,

            // new ClientResource($client)
        ], 200);

     }
     public function resendVerifiyCode(Request $request)
     {
        $validator=Validator::make($request->all(),[
            'email' =>'required|email|exists:clients,email',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ]);
        }
        $client=Client::where('email', $request->email)->where('verified_email',false)->first();
        if(empty($client))
        {
           return response()->json([
               'status'=>false,
               'message'=>__('site.Login Direct You Do not Need To Verify'),
           ]);
        }
         //send cerify email
         $token=$this->createToken(new ClientVerifyEmail());
         $verifies=ClientVerifyEmail::where('email',$client->email)->delete();
         ClientVerifyEmail::create([
             'email'=>$client->email,
             'token' =>$token,
         ]);
         Mail::to($client->email)->send(new VerifyEmail($client->name,$token));
        //end send verify email
        return response()->json([
            "status" => true,
            'message'=> __('site.Check Your Mail To Verify Your Account'),
        ], 200);
     }
     public function createToken($model)
    {
        $token=Str::random(6);
        if($model->where('token',$token)->get()->count()>0)
        {
            $this->createToken($model);
        }
        return $token;
    }


    public function createCode($model)
    {
        $code=Str::random(6);
        if($model->where('code',$code)->get()->count()>0)
        {
            $this->createCode($model);
        }
        return $code;
    }
    public function webhoo(Request $request)
    {
        return   $request->all();
    // return 1542;
    }
    //public function ResendVerfiyCode()
    // {        $validator=Validator::make($request->all(),[
    //             'email' =>'required|email|exists:students,email',
    //         ]);
    //         if($validator->fails())
    //         {
    //             return response()->json([
    //                 'status'=>false,
    //                 'message'=>$validator->errors()->tojson(),
    //             ]);
    //         }
    //         $student=Student::where('email', $request->email)->where('verified_email',false)->first();
    //         if(empty($student))
    //         {
    //            return response()->json([
    //                'status'=>false,
    //                'message'=>'Login Direct You Do Not Need To Verify Your Account',
    //            ]);
    //         }
    //         //send cerify email
    //         $token=$this->createToken(new StudentVerifyEmail());
    //         $verifies=StudentVerifyEmail::where('email',$student->email)->delete();
    //         StudentVerifyEmail::create([
    //             'email'=>$student->email,
    //             'token' =>$token,
    //         ]);
    //         Mail::to($student->email)->send(new VerifyEmail($student->name,$token));
    //     //end send verify email
    //     return response()->json([
    //         "status" => true,
    //         'message'=> 'Check Your Mail To Verify Your Account',
    //     ], 200);
    // }
}
