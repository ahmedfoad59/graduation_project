<?php

namespace App\Http\Controllers\Api\Employee;
use App\Http\Controllers\Controller;

use App\Http\Requests\UpdatePasswordRequest;
use App\Mail\ForgetPassword;
use App\Models\Employee;
use App\Models\EmployeeForgetPassword;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
class resetPasswordController
{
  
     public function employeeForgetPassword(Request $request)
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
         $employee=Employee::where('email', $request->email)->where('verified_email',true)->first();
         if(empty($employee))
         {
            return response()->json([
                'status'=>false,
                'message'=>__('site.Please Verify Your Account First'),
            ]);
         }
         $token=$this->createToken(new EmployeeForgetPassword());
         
         $verifies=EmployeeForgetPassword::where('email',$request->email)->delete();
 
         $verify=EmployeeForgetPassword::create([
             'email' =>$request->email,
             'token' =>$token, 
         ]);
 
         if(!empty($employee))
         {
             Mail::to($request->email)->send(new ForgetPassword($employee->name,$token));
             return response()->json([
                 'status'=>true,
                 'message'=>__('site.Code Send To Your Email Please Check Your Mail To Reset Your Password')
             ]);
         }
     }
     public function employeeResetPassword(Request $request)
     {
         $validator=Validator::make($request->all(),[
             'token'     =>'required|exists:employee_forget_passwords,token',
             'password'  =>'required | min:6 |max : 20 | confirmed',
             'password_confirmation'=>"required|same:password",
         ]);
         if($validator->fails())
         {
             return response()->json([
                 'status'=>false,
                 'message'=>$validator->errors(),
             ]);
         }
        //  $arr=explode('-',$request->token);
         $tokenRow=EmployeeForgetPassword::where('token', $request->token)->first();
         if(empty($tokenRow)){
             return response()->json([
                 'status'=>false,
                 'message'=>__('site.Please Write The Right Code'),
             ]);
         }
         $employee=Employee::where('email', $tokenRow->email)->first();
         if(empty($employee)){
             return response()->json([
                 'status'=>false,
                 'message'=>__('site.Please Write The Right Code'),
             ]);
         }
         $employee->update([
             'password'=>Hash::make($request->password),
         ]);
         $tokenRow->delete();
        
             return response()->json([
                 'status'=>true,
                 'message'=>__('site.Your Password Reset Successfully'),
             ]);
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
}
