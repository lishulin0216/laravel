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
//     return view('/home/shouye');
// });
Route::get('/', 'home\demoController@index');

// 后台首页
Route::get('/admin', 'admin\indexController@index');
// 注册
Route::resource('/admin/zhuce','admin\zhuceController@index');
// 登录
Route::resource('/admin/login','admin\loginController@index');
// 类别管理
Route::resource('/admin/type','admin\typeController@index');
// 用户管理
Route::resource('/admin/aduser','admin\aduserController@index');
// 审核管理
Route::resource('/admin/audit','admin\auditController@index');
// 权限管理
Route::resource('/admin/permissions','admin\permissionsController@index');


// Route::group(['prefix'=>'admin','nampspace'=>'admin'],function(){
// 	Route::resource();
// })
Route::resource('/fabu','home\fabuController');
Route::resource('/wenti','home\wentiController');
// //前台
// Route::group(['nampspace'=>'home'],function(){
	
// })
