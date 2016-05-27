<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'UserController@getDashboard');

Route::get('/signup', [
					   'uses' => 'UserController@getSignup',
					   'as' => 'signup']);

Route::get('/signin', [
					  'uses' => 'UserController@getLogin',
					  'as' => 'signin']);

Route::get('/dashboard', ['uses' => 'UserController@getDashboard',
	                      'as' => 'dashboard']);

Route::get('/changepassword', 'UserController@getChangePassword');
Route::get('/updateprofile', 'UserController@getUpdateProfile');

Route::post('/signup', 'UserController@postSignup');
Route::post('/signin', 'UserController@postLogin');
Route::get('/signout', 'UserController@postLogout');
Route::post('/changepassword', 'UserController@postChangePassword');
Route::post('/updateprofile', 'UserController@postUpdateProfile');

Route::get('/todolists', 'TodoController@getTodoList');
Route::get('/newtodolist', 'TodoController@getNewTodoList');

Route::post('/todolist', 'TodoController@postTodoList');
Route::post('/todolists', 'TodoController@postTodoLists');
Route::post('/updatetodolist', 'TodoController@postUpdateTodoList');
Route::post('/todoitem', 'TodoController@postTodoItem');
Route::post('/updatetodoitem', 'TodoController@postUpdateTodoItem');

Route::get('/settings', ['uses' => 'SettingsController@index',
						 'as' => 'settings']);

Route::get('/profile', 'UserController@profile');

// 'middleware' => 'auth',