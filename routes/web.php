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
Route::get('/', "IndexController@index");

Route::get('/event/{city}/{year}/{month}', "EventController@event");
// Route::get('/event/{city}/{year}/{month}/{page}', "EventController@event2");
Route::get('/event/{city}/{year}/{month}/{page}', "EventController@event3");



// Route::get('/login/{city}/{year}/{month}', "LoginController@index");
Route::get('/login', "LoginController@login");
Route::post('/login', "LoginController@postLogin");
Route::get('/logout', "LoginController@logout");

Route::get('/member', "MemberController@index");

Route::get('/management', "ManagementController@index");

Route::get('/simulate', "SimulateController@index");
Route::get('/ui', "UiController@index");

Route::get('/memberAdmin/{id}/show', 'MemberAdminController@idShow');
Route::resource('/memberAdmin', 'MemberAdminController');

Route::get('/signup/{city}/{year}/{month}', "SignupController@index");
Route::get('/signup/{city}/{year}/{month}/{action}', "SignupController@action");

Route::get('/teamSignup/{city}/{year}/{month}', "TeamSignupController@index");
Route::get('/teamSignup/{city}/{year}/{month}/{action}', "TeamSignupController@action");

Route::get('/query/{city}/{year}/{month}', "QueryController@index");

Route::resource('/eventAdmin', 'EventAdminController');

Route::resource('/accountAdmin', 'AccountAdminController');

Route::get('/api/member/show', "MemberApiController@show");
Route::post('/api/member/teamAdd', "MemberApiController@teamAdd");
Route::post('/api/member/add', "MemberApiController@add");
Route::get('/api/member/addProduct', "MemberApiController@addProduct");
Route::get('/api/member/runEvent', "MemberApiController@runEvent");

Route::resource('/orderGroupAdmin', 'OrderGroupAdminController');

Route::resource('/orderAdmin', 'OrderAdminController');

Route::get('/memberTeamAdmin', "MemberTeamAdminController@index");

//post
Route::get('/posts', 'PostController@apiAll');
Route::get('/posts/{id}', 'PostController@apiFindPostById');
Route::post('/posts', 'PostController@apiCreatePost');
Route::put('/posts/{id}', 'PostController@apiUpdatePostById');
Route::delete('/posts/{id}', 'PostController@apiDeletePostById');