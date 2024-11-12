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
Route::get('reg','LoginController@reg');
Route::get('signup','LoginController@register');
//修改密码页面
Route::get('forget-password','LoginController@forgetpassword');
//详情页面
Route::get('project-details','LoginController@details');

//KYC认证1
Route::get('kyc-process','KycController@kyc');
//KYC认证2
Route::any('kyc-process-step2','KycController@kyc2');
//KYC认证3
Route::get('kyc-process-step3','KycController@kyc3');
//充值頁面
Route::get('deposit','LoginController@deposit');
//转换页面
Route::get('transfer ','LoginController@transfer');

//提现界面
Route::get('withdrawal','AccountController@withdrawal');
Route::get('getnetwork','AccountController@getNetWork');
