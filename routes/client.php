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
    Route::post('mywebhoo','registerController@webhoo');
    
   //verify account
    Route::post('VerifyAccount','registerController@VerifyAccount');
    
    Route::post('resendVerifiyCode','registerController@resendVerifiyCode');
 
    Route::post('login','authenticationController@authenticate');
    Route::get('generateAgoraToken','AgoraController@generateToken');

    //forget and reset password
    Route::post('clientForgetPassword','resetPasswordController@clientForgetPassword');
    Route::post('clientResetPassword','resetPasswordController@clientResetPassword');
    //end forget and reset password


    Route::group(['middleware'=>'client'],function(){

        Route::post('logout','authenticationController@logout');
        Route::get('getProfile','profileController@getProfile');
        Route::post('updateProfile','profileController@updateProfile');
        Route::post('clientChangPassword','profileController@changeClientPassword');


// dates

Route::post('date/store','DateController@store');
Route::post('date/update','DateController@update');
Route::post('date/delete','DateController@delete');
Route::post('comment/getCommentByProjectId','CommentController@getCommentByProjectId');
Route::post('comment/getCommentByReferendumID','CommentController@getCommentByReferendumID');
        



    });
});

