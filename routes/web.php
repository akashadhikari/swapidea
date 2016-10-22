<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', [
	'uses' => '\App\Http\Controllers\HomeController@index',
	'as'   => 'home',
]);



Route::get('/alert', function () {
	return redirect()->route('home')->with('info', 'You have signed up!');
});


Route::get('/signup', [
	'uses' => '\App\Http\Controllers\AuthController@getSignup',
	'as'   => 'auth.signup',
	'middleware' => ['guest'],

]);

Route::post('/signup', [
	'uses' => '\App\Http\Controllers\AuthController@postSignup',
	'middleware' => ['guest'],

]);


Route::get('/', [
	'uses' => '\App\Http\Controllers\AuthController@getSignIn',
	'as'   => 'home',

]);

Route::post('/', [
	'uses' => '\App\Http\Controllers\AuthController@postSignIn',

]);

Route::get('/signout', [
	'uses' => '\App\Http\Controllers\AuthController@getSignout',
	'as'   => 'auth.signout',
]);

Route::get('/search', [
	'uses' => '\App\Http\Controllers\SearchController@getResults',
	'as'   => 'search.results',

]);

Route::get('/{username}', [
	'uses' => '\App\Http\Controllers\ProfileController@getProfile',
	'as'   => 'profile.index',

]);

Route::post('/{username}', [
	'uses' => '\App\Http\Controllers\ProfileController@updateAvatar',
	'as'   => 'profile.index',

]);
