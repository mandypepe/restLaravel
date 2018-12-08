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
    return view('welcome');
});
Route::get('polls', 'PollsController@index')->name('ini');
Route::get('polls/{id}', 'PollsController@show');
Route::get('resp', 'QuestionsController@index');
Route::get('resp/{ question}', 'QuestionsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('social/{provider?}', 'SocialController@getSocialAuth');
Route::get('social/callback/{provider?}', 'SocialController@getSocialAuthCallback');