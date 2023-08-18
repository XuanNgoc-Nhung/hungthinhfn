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
    Route::post('/rut-tien-ca-nhan', 'UserController@rutTienCaNhan');
    Route::post('/check-dang-ky-khoan-vay', 'UserController@checkDangKyKhoanVay');
    Route::post('/luu-thong-tin-chu-ky', 'UserController@luuThongTinChuKy');
});
Route::group(['prefix' => '/admin','middleware'=>['checkLogin','checkAdmin']], function(){
    Route::get('/', 'AdminController@getHome')->name('admin.home');
    Route::get('/khoan-vay', 'AdminController@getKhoanVay')->name('admin.khoanVay');
    Route::get('/tai-khoan', 'AdminController@getQuanLyTaiKhoan')->name('admin.quanLyTaiKhoan');
    Route::get('/yeu-cau-rut-tien', 'AdminController@getYeuCauRutTien')->name('admin.quanLyYeuCauRutTien');
    Route::post('/danh-sach-tai-khoan', 'AdminController@danhSachTaiKhoan');
    Route::post('/danh-sach-yeu-cau-vay', 'AdminController@danhSachYeuCauVay');
    Route::post('/cap-nhat-trang-thai-yeu-cau-vay', 'AdminController@capNhatTrangThaiYeuCauVay');
    Route::post('/cap-nhat-trang-thai-tai-khoan', 'AdminController@capNhatTrangThaiTaiKhoan');
    Route::post('/cap-nhat-trang-thai-rut-tien', 'AdminController@capNhatTrangThaiRutTien');
    Route::post('/danh-sach-yeu-cau-rut-tien', 'AdminController@danhSachYeuCauRutTien');
});
Route::get('/dang-ky', 'UserController@getDangKy')->name('user.dangKy');
Route::get('/dang-nhap', 'UserController@getDangNhap')->name('user.dangNhap');
Route::post('/dang-ky-tai-khoan', 'UserController@dangKyTaiKhoan');
Route::post('/dang-nhap-tai-khoan', 'UserController@dangNhapTaiKhoan');
