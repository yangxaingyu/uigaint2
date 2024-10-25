<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
//登入页面
Route::get('signin','LoginController@login');
//注册页面
Route::get('signup','LoginController@register');
//修改密码页面
Route::get('forget-password','LoginController@forgetpassword');
//详情页面
Route::get('project-details','LoginController@details');
