<?php
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\voteController;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Auth::routes();

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return 'cach clear success';
});


// Route::get('/', function () {
//     return view('auth.login');
// });



Route::get('/', function () {
    return view('site.home');
}); 

Route::get('/ourProject', function () {
    return view('site.ourproject');
})->name('ourproject');
// Route::get('/studentform', function () {  
//     return view('site.student_form');
// })->name('show');
//    Route::get('student','StudentController@index')->name('show');

  Route::controller(StudentController::class)->group(function () {
    //get view
    Route::get('/show', 'index')->name('show_student');
    Route::get('/index_student', 'index_student')->name('index_student');

    Route::get('/withdraw', 'show')->name('withdraw');
    Route::get('/index_withdraw', 'index_withdraw')->name('index_withdraw');


    Route::get('/show_add_course', 'show_course')->name('show_add_course');
    Route::get('/index_add_course', 'index_add_course')->name('index_add_course');
   // end get view

    // download view
    // Route::get('/print_add_course/{id}', 'print_course')->name('print_add_course');
    Route::get('printw/{id}', 'printw')->name('printw');
    Route::get('prints/{id}', 'prints')->name('prints');
    Route::get('print_add_course/{id}', 'print_add_course')->name('print_add_course');









    Route::post('/add', 'store')->name('create');
    Route::post('/addWithdraw', 'storew')->name('create_withdraw');
    Route::post('/addcourse', 'store_course')->name('create_course');


    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::get('/delet/{id}', 'destroy')->name('delet');
}); 


Route::controller(FormController::class)->group(function () {
    // 11111111111111111111111111111111111111111111
    Route::get('/index1', 'index1')->name('index1');
    Route::get('/show1', 'show1')->name('show1'); 
    Route::post('/store1', 'store1')->name('store1');
    Route::get('print1/{id}', 'print1')->name('print1');

    // 22222222222222222222222222222222222222222222
    Route::get('/index2', 'index2')->name('index2');
    Route::get('/show2', 'show2')->name('show2'); 
    Route::post('/store2', 'store2')->name('store2');
    Route::get('print2/{id}', 'print2')->name('print2');

    // 333333333333333333333333333333333333333333333
    Route::get('/index3', 'index3')->name('index3');
    Route::get('/show3', 'show3')->name('show3');
    Route::post('/store3', 'store3')->name('store3');
    Route::get('print3/{id}', 'print3')->name('print3');

    // 44444444444444444444444444444444444444444444444
    Route::get('/index4', 'index4')->name('index4');
    Route::get('/show4', 'show4')->name('show4');
    Route::post('/store4', 'store4')->name('store4');
    Route::get('print4/{id}', 'print4')->name('print4');

    // 5555555555555555555555555555555555555555555555
    Route::get('/index5', 'index5')->name('index5');
    Route::get('/show5', 'show5')->name('show5');
    Route::post('/store5', 'store5')->name('store5');
    Route::get('print5/{id}', 'print5')->name('print5');

});



Route::controller(voteController::class)->group(function () {
    // 11111111111111111111111111111111111111111111
    Route::get('/votes/index', 'index')->name('votes/index');
    Route::get('/votes/show', 'show')->name('votes/show');
    Route::post('/votes/store', 'store')->name('votes/store');
    Route::get('/votes/print1/{id}', 'print1')->name('votes/print1');

  

});



Route::group(
    [
        'prefix'     => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {


        Route::get('/dashboard/home','HomeController@index')->name('dashboard.home')->middleware('admin');

        Route::prefix('dashboard')->namespace('Dashboard')->middleware(['auth','admin'])->name('dashboard.')->group(function () {


            Route::resource('/users', 'UserController');

             Route::resource('/roles', 'RoleController');
                  //  Route::resource('countries',CountryController::class);
           //  Route::resource('countries',CountryController::class);
           //  Route::resource('employees','CountryController');



        });


    });




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
