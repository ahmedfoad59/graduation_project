<?php

namespace App\Http\Controllers\Api\Employee;

use App\CustomClass\response;
// use App\Http\Resources\ClientResource;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Validation\Rule;
use App\Models\EmployeeVerifyEmail;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;


class registerController extends Controller 
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [

            'name'                => 'required|string|max:255|unique:employees,name',
            'email'                => 'required|email|max:255|unique:employees,email' ,
            'password'             => 'required|confirmed|min:6|max:255',
            'country_id'           => 'required|exists:countries,id',
            'category_id'          => "required|exists:categories,id",
            'avatar'                => 'nullable|image',
            'device_serial'	       => 'nullable', 
            'device_token'	       => 'nullable',
            'password_confirmation'=> "required|string|same:password",
            
        ]);

        if($validator->fails()){
            return response()->json([
                "status" => false,
                'errors'=> $validator->errors(),
            ], 402);
        }
        if(!empty(Employee::where('device_serial',$request->device_serial)->first()))
        {
            return response()->json([
                "status" => false,
                'message'=> __('site.You Have Account Upgrade It'),
            ], 404);
        }
        $employee = Employee::create([
              
            'name'                     => $request->get('name'),
            'email'                     => $request->get('email'),
            'password'                  => Hash::make($request->get('password')),
            'country_id'                => $request->get('country_id'),
            'category_id'               => $request->get('category_id'),
            'avatar'                     => $request->get('avatar'),
        ]);


        if($request->has('device_token')){
            $employee->device_token   = $request->device_token;
        }
        if($request->has('device_serial')){
            $employee->device_serial   = $request->device_serial;
        }
        if($request->has('avatar') && $request->avatar != null)
        {
            $path = rand(0,1000000) . time() . '.' . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move(base_path('public/uploads/employee') , $path);
            $employee->avatar   = $path;
        }
        $employee->save();

        // $token = JWTAuth::fromUser($bidder);
        //send cerify email
            $token=$this->createToken(new EmployeeVerifyEmail());
            $verifies=EmployeeVerifyEmail::where('email',$employee->email)->delete();
            EmployeeVerifyEmail::create([
                'email'=>$employee->email,
                'token' =>$token,
            ]);
            Mail::to($employee->email)->send(new VerifyEmail($employee->name,$token));
        //end send verify email
        return response()->json([
            "status" => true,
            'message'=> __('site.Check Your Mail To Verify Your Account'),
        ], 200);
    }
     public function VerifyAccount(Request $request)
     {
         $validator=Validator::make($request->all(),[
             'token' =>'required|exists:employee_verify_emails,token',
         ]);
         if($validator->fails())
         {
             return response()->json([
                 'status'=>false,
                 'message'=>$validator->errors(),
             ]);
         }
         $codeRow=EmployeeVerifyEmail::where('token', $request->token)->first();
         if(empty($codeRow)){
             return response()->json([
                 'status'=>false,
                 'message'=>__('site.Please Write The Right Code'),
             ]);
         }
         $employee=Employee::where('email', $codeRow->email)->first();
         if(empty($employee)){
             return response()->json([
                 'status'=>false,
                 'message'=>__('site.Please Write The Right Code'),
             ]);
         }

         $codeRow->delete();
         $employee->verified_email=true;
         $employee->save();
         $token = JWTAuth::fromUser($employee);
         return response()->json([
            "status" => true,
            'message'=> __('site.Your Account Successfully Register'),
            'employee'   =>"sucess",
            'token'  => $token,

        ], 200);

     }
     public function resendVerifiyCode(Request $request)
     {
        $validator=Validator::make($request->all(),[
            'email' =>'required|email|exists:employees,email',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ]);
        }
        $employee=Employee::where('email', $request->email)->where('verified_email',false)->first();
        if(empty($employee))
        {
           return response()->json([
               'status'=>false,
               'message'=>__('site.Login Direct You Do not Need To Verify'),
           ]);
        }
         //send cerify email
         $token=$this->createToken(new EmployeeVerifyEmail());
         $verifies=EmployeeVerifyEmail::where('email',$employee->email)->delete();
         EmployeeVerifyEmail::create([
             'email'=>$employee->email,
             'token' =>$token,
         ]);
         Mail::to($employee->email)->send(new VerifyEmail($employee->name,$token));
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
