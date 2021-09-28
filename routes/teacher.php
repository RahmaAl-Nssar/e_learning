<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('teacher', function () {
    return view('teacher-register');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),'teacher',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ],
       // 'namespace'=>'Teachers',
        
    ], function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::post('edit_teacher', 'Teachers\ProfileController@update')->name('teacher.update');  
        Route::resource('quizes', 'Teachers\QizzesController');

});

Auth::routes();


