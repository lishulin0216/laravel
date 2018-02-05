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
//前台登录
Route::get('/login','home\loginController@index');

//前台注册
Route::get('/zhuce','home\regController@index');

//前台列表
Route::get('/list','home\listController@index');


//首页
Route::get('/shouye','home\shouyeController@index');

