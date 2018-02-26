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

//前台个人中心页
Route::get('/fenye','home\zhuyeController@index');

//Route::resource('/home/help','home\zhuyeController@index');
//我的提问
Route::get('/tiwen','home\zhuyeController@index');

//我的回答
Route::get('/huida','home\zhuyeController@index');

//我的积分
Route::get('/jifen','home\zhuyeController@index');

//浏览记录
Route::get('/liulan','home\zhuyeController@index');

//系统消息
Route::get('/xitong','home\zhuyeController@index');

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
