<?php

use Illuminate\Support\Facades\Route;

Route::get('quiz/enrole/{id}','Students\QuizController@enloe')->name('quiz.enrole');
Route::post('quizzes/submit/{id}','Students\QuizController@submit')->name('student.quizzes.submit');
Route::get('quiz/show/{id}','Students\QuizController@show')->name('student.quiz.show');