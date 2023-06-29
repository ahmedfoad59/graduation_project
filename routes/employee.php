<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/clear-cache',function(){
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    // Artisan::call('jwt:secret');
    return "cache clear";
});
//rgister and verify account
Route::group(['middleware'=>['authGuest']],function(){
    //for register
    Route::post('register','registerController@register');

   //verify account
    Route::post('VerifyAccount','registerController@VerifyAccount');
    
    Route::post('resendVerifiyCode','registerController@resendVerifiyCode');
 
    // Route::post('login','authenticationController@authenticate');

    //forget and reset password
    Route::post('employeeForgetPassword','resetPasswordController@employeeForgetPassword');
    Route::post('employeeResetPassword','resetPasswordController@employeeResetPassword');
    //end forget and reset password


    Route::group(['middleware'=>'employee'],function(){

        Route::post('logout','authenticationController@logout');
        Route::get('getProfile','profileController@getProfile');
        Route::post('updateProfile','profileController@updateProfile');
        Route::post('employeechangPassword','profileController@changeEmployeePassword');


        


    });
});

