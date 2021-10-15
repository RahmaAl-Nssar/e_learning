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
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ],
       // 'namespace'=>'Teachers',
        
    ], function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::post('edit_teacher', 'ProfileController@updateTeacher')->name('teacher.update');  
        Route::get('edit_teacher', 'ProfileController@edit')->name('teacher.edit.profile');
        Route::resource('quizes', 'Teachers\QizzesController');
        Route::get('get_subjects/{id}','Teachers\QizzesController@get_subjects')->name('teacher.get_subjects');
        Route::prefix('qusetion')->group(function () {
            Route::get('index/{id}','Teachers\QusetionsController@index')->name('qusetions.index');
            Route::get('create/{id}','Teachers\QusetionsController@create')->name('qusetions.create');
            Route::post('store','Teachers\QusetionsController@store')->name('qusetions.store');
            Route::get('edit/{id}','Teachers\QusetionsController@edit')->name('edit.question');
            
        });
});

Auth::routes();


