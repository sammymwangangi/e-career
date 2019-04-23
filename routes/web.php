<?php

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
    return view('index');
});

Auth::routes([
  'register' => false,
  'verify' => true,
  'reset' => false
]);

Auth::routes();

Route::get('profile', function () {
    return view('profile');
})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('subjects', 'SubjectsController');
Route::resource('quizzes', 'QuizController');
Route::resource('questions', 'QuestionController');
Route::resource('answer', 'AnswerController');
Route::resource('result', 'ResultController');
Route::resource('test', 'TestController');
