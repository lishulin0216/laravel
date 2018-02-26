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

//前台个人中心页
Route::get('/fenye','home\zhuyeController@index');

Route::get('/home/index', 'home\demoController@index');

//发布页
Route::resource('/fabu','home\fabuController');

//问题页
Route::resource('/wenti','home\wentiController');


// 后台首页
// Route::get('/admin/index', 'admin\indexController@index');
// 添加
Route::resource('/admin/add','admin\aduserController@create');
// 登录
Route::resource('/admin/login','admin\loginController@index');
// 类别管理
Route::resource('/admin/type','admin\typeController@index');
// 用户管理
Route::resource('/admin/aduser','admin\aduserController');
// 审核管理
Route::resource('/admin/audit','admin\auditController@index');
// 权限管理
Route::resource('/admin/permissions','admin\permissionsController@index');



