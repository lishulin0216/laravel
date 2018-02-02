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

// Route::get('/', function () {
//     return view('welcome');
// });

// 后台登录
Route::get('/','admin\loginController@index');

// 前台登录
Route::get('/login','home\loginController@index');

//前台注册
Route::get('/logins','home\loginsController@index');

// 前台首页
Route::get('/index','home\indexController@index');

//列表页
Route::get('/index/list','home\listController@index');


