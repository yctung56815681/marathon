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
//Index
Route::get('/',"IndexController@index" );

Route::get('/event/{city}/{year}/{month}', "EventController@event");
// Route::get('/event/{city}/{year}/{month}/{page}', "EventController@event2");
Route::get('/event/{city}/{year}/{month}/{page}', "EventController@event3");



// Route::get('/login/{city}/{year}/{month}', "LoginController@index");
Route::get('/login', "LoginController@login");
Route::post('/login', "LoginController@postLogin");

Route::get('/member', "MemberController@index");

Route::get('/management', "ManagementController@index");

Route::get('/simulate', "SimulateController@index");
Route::get('/ui', "UiController@index");

// Route::get('/', 'MemberAdminController@index');
Route::resource('/memberAdmin', 'MemberAdminController');

Route::get('/signup/{city}/{year}/{month}', "SignupController@index");
Route::get('/signup/{city}/{year}/{month}/{action}', "SignupController@action");

Route::get('/teamSignup/{city}/{year}/{month}', "TeamSignupController@index");
Route::get('/teamSignup/{city}/{year}/{month}/{action}', "TeamSignupController@action");

Route::get('/query/{city}/{year}/{month}', "QueryController@index");
Route::resource('/eventManager', 'EventManagerController');


//post
Route::get('/posts', 'PostController@apiAll');
Route::get('/posts/{id}', 'PostController@apiFindPostById');
Route::post('/posts', 'PostController@apiCreatePost');
Route::put('/posts/{id}', 'PostController@apiUpdatePostById');
Route::delete('/posts/{id}', 'PostController@apiDeletePostById');