<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Guest\GuestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/clear-cache',function(){
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    // Artisan::call('jwt:secret');
    return "cache clear";
});


    Route::get('getAllEmployee','GuestController@getAllEmployee');
    Route::get('getAllCountries','GuestController@getAllCountries');
    Route::get('getAllCategories','GuestController@getAllCategories');
    Route::get('getAllBrands','GuestController@getAllBrands');




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
