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
    Route::get('/xac-minh-thong-tin-ca-nhan', 'UserController@getXacMinhThongTinCaNhan');
    Route::get('/xac-minh-thong-tin-ngan-hang', 'UserController@getXacMinhThongTinNganHang');
    Route::get('/hoan-tat-xac-minh', 'UserController@getHoanTatXacMinh');
    Route::get('/xac-nhan-khoan-vay', 'UserController@getXacNhanKhoanVay');
    Route::get('/vay-thanh-cong', 'UserController@getVayThanhCong');
    Route::get('/vi-tien', 'UserController@getViTien');
    Route::get('/hop-dong-vay', 'UserController@getHopDongVay')->name('user.hopDongVay');
    Route::get('/thong-bao', 'UserController@getThongBao');
    Route::get('/dang-xuat', 'UserController@dangXuat');
    Route::get('/bien-dong-so-du', 'UserController@getBienDongSoDu');
    Route::post('/xac-minh-thong-tin-ngan-hang', 'UserController@xacMinhThongTinNganHang');
    Route::post('/xac-minh-thong-tin-ca-nhan', 'UserController@xacMinhThongTinCaNhan');
    Route::post('/xac-minh-hinh-anh', 'UserController@getXacMinhThongTinHinhAnh');
    Route::post('/dang-ky-so-tien-vay', 'UserController@dangKySoTienVay');
    Route::post('/lay-thong-tin-ca-nhan', 'UserController@getThongTinCaNhan');
});
Route::group(['prefix' => '/admin'], function(){
    Route::get('/', 'AdminController@getHome')->name('admin.home');
});
Route::get('/dang-ky', 'UserController@getDangKy')->name('user.dangKy');
Route::get('/dang-nhap', 'UserController@getDangNhap')->name('user.dangNhap');
Route::post('/dang-ky-tai-khoan', 'UserController@dangKyTaiKhoan');
Route::post('/dang-nhap-tai-khoan', 'UserController@dangNhapTaiKhoan');
