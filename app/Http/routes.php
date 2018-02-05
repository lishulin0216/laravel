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


// 后台登录
Route::get('/','admin\loginController@index');

// 前台登录
Route::get('/login','home\loginController@index');

//前台注册
// Route::get('/logins','home\loginsController@index');

// 前台首页
Route::get('/index','home\indexController@index');

//列表页
Route::get('/index/list','home\listController@index');

//发布页
Route::get('/index/fabu','home\fabuController@index');

//详情页
Route::get('/index/huifu','home\huifuController@index');

//前台个人中心页
Route::get('/fenye','home\zhuyeController@index');






