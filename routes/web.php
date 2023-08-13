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


Auth::routes();
Route::group(['prefix' => '/','middleware' => ['checkLogin']], function(){
    Route::get('/', 'UserController@getHome')->name('user.home');
    Route::get('/ho-so', 'UserController@getPageHoSo')->name('user.hoSo');
    Route::get('/bank-info', 'UserController@getBankInfo')->name('user.bankInfo');
    Route::get('/user-info', 'UserController@getUserInfo')->name('user.userInfo');
    Route::get('/dang-ky-khoan-vay', 'UserController@getDangKyKhoanVay')->name('user.dangKyKhoanVay');
    Route::get('/xac-minh', 'UserController@getXacMinhThongTin')->name('user.xacMinh');
});
Route::get('/dang-ky', 'UserController@getDangKy')->name('user.dangKy');
Route::get('/dang-nhap', 'UserController@getDangNhap')->name('user.dangNhap');
Route::post('/dang-ky-tai-khoan', 'UserController@dangKyTaiKhoan');
Route::post('/dang-nhap-tai-khoan', 'UserController@dangNhapTaiKhoan');
