<?php

namespace App\Http\Controllers\Api\Employee;
use App\Http\Controllers\Controller;

use App\CustomClass\response;
use App\Http\Resources\EmployeeResource;
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
                    'token'   => $token,
                    // new EmployeeResource($employee)
                ], 200);
    }

        public function logout(Request $request){

            Auth::guard('employee')->logout('true');

            return response()->json([
                'status'  => true,
                'message' => __('site.Logout Successfully'),
            ], 200);          }
}
