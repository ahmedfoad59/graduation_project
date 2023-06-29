<?php

namespace App\Http\Controllers\Api\Client;
use App\Http\Controllers\Controller;

use App\CustomClass\response;
// use App\Http\Resources\ClientResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Traits\ChangePaymentStatus;

class authenticationController extends Controller
{
        use ChangePaymentStatus;
        public function authenticate(Request $request){



            $checkemployee = Validator::make($request->all(), [
                'email' => 'required|exists:employees,email',
            ]);
            
            $checkclient = Validator::make($request->all(), [
                'email' => 'required|exists:clients,email',
            ]);
            if ($checkemployee->fails()) 
            {
                            
                        $validator = Validator::make($request->all(), [
                            'email' => 'required|exists:clients,email',
                            'password' => 'required',
                        ]);

                        if($validator->fails()){
                            return response()->json([
                                'status'  => false,
                                'errors' =>$validator->errors(),
                            ], 404);
                        }

                        $credentials = ['email' => $request->email, 'password' => $request->password];


                        try {
                            if (! $token = auth('client')->attempt($credentials)) {
                                return response()->json([
                                    'status'  => false,
                                    'message' =>__('site.passwored or email is wrong') ,
                                ], 404);
                            }
                        } catch (JWTException $e) {
                            return response()->json([
                                'status'  => false,
                                'message' =>__('site.some thing is wrong' ),
                            ], 404);
                        }

                        $client= auth('client')->user();
                        // $this->payment($client);
                        if($client->verified_email==false)
                        {
                            return response()->json([
                                'status'  => false,
                                'message' => __('site.You Need To Verify Your Account'),
                                'verifiy_email'=>false,
                            ], 404);
                        }
                        
                        if($request->has('device_token')){
                                $client->device_token   = $request->device_token;
                                $client->save();
                            }

                        return response()->json([
                                'status'  => true,
                                'message' => __('site.succeess'),
                                'client'=> "succes",
                                'type'=> 'client',
                                'token'   => $token,
                            ], 200);
               
            } 
            

            if ($checkclient->fails()) 
            {
                            
                $validator = Validator::make($request->all(), [
                    'email' => 'required|exists:employees,email',
                    'password' => 'required',
                ]);
    
                if($validator->fails()){
                    return response()->json([
                        'status'  => false,
                        'errors' =>$validator->errors(),
                    ], 404);
                }
    
                $credentials = ['email' => $request->email, 'password' => $request->password];
    
    
                try {
                    if (! $token = auth('employee')->attempt($credentials)) {
                        return response()->json([
                            'status'  => false,
                            'message' =>__('site.passwored or email is wrong') ,
                        ], 404);
                    }
                } catch (JWTException $e) {
                    return response()->json([
                        'status'  => false,
                        'message' =>__('site.some thing is wrong' ),
                    ], 404);
                }
    
                $employee= auth('employee')->user();
              // $this->payment($client);
                if($employee->verified_email==false)
                {
                    return response()->json([
                        'status'  => false,
                        'message' => __('site.You Need To Verify Your Account'),
                        'verifiy_email'=>false,
                    ], 404);
                }
               
                if($request->has('device_token')){
                        $employee->device_token   = $request->device_token;
                        $employee->save();
                    }
    
                return response()->json([
                        'status'  => true,
                        'message' => __('site.succeess'),
                        'employee'=> 'succes', 
                        'type'=> 'employee',
                        'token'   => $token,
                        // new EmployeeResource($employee)
                    ], 200);
               
            } 

    }

        public function logout(Request $request){

            Auth::guard('client')->logout('true');

            return response()->json([
                'status'  => true,
                'message' => __('site.Logout Successfully'),
            ], 200);          }
}
