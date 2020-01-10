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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/user/reg','User\UserController@reg');     //注册
Route::post('/api/user/login','User\UserController@login'); // 登录
Route::get('/api/user/info','User\UserController@userInfo'); // 获取用户信息
