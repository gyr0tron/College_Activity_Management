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

// Web Api
Route::prefix('api/v1')->group(function () {
  // User
  Route::get('/user/info','api\UserController@getInfo');
  Route::get('/users/get','api\UserController@getUsers');
  // College
  Route::post('/colleges/add','api\CollegeApiController@postAdd');
});
