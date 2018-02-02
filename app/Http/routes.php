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
//     return view('home/zhuye');
// });

Route::get('/fenye','home\zhuyeController@index');

// Route::group(['prefix' => 'admin','namespace' => 'admin'],function(){
// 	Route::resource('')
// })

// Route::group(['prefix' => 'home','namespace' => 'home'],function(){
// 	Route::resource('')
// })




