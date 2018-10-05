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

Route::get('/', 'HomeController@getHome');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/password', 'HomeController@getHome')->name("set_password");

// Dashboard
Route::get('/dashboard', 'DashboardController@get');


// Web Api
Route::prefix('api/v1')->group(function () {
  // User
  Route::get('/user/info','api\UserController@getInfo');
  Route::get('/users/list','api\UserController@getUsers');
  Route::get('/users/add','api\UserController@postAdd');
  // College
  Route::post('/colleges/add','api\CollegeApiController@postAdd');
  // Department
  Route::post('/departments/add','api\DepartmentApiController@postAdd');
  Route::post('/departments/list','api\DepartmentApiController@getList');
});
