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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('trangchu','PagesController@trangchu');

Route::get('gioithieu','PagesController@gioithieu');

Route::get('blogphim','PagesController@blogphim');

Route::post('dangnhap','UserController@postDangNhap');

Route::post('dangky','UserController@postDangKy');

Route::get('dangxuat','UserController@getDangxuat');

Route::get('muave','PagesController@getMuaVe');

Route::get('chonsuat','PagesController@chonSuat');

Route::get('phimdangchieu', 'PagesController@getPhimDangChieu');
Route::get('phimsapchieu', 'PagesController@getPhimSapChieu');

Route::post('timkiem/tukhoa', 'PagesController@getTimKiem')->name('timkiem');

Route::get('chi-tiet-phim/{id}','PagesController@getChiTietPhim')->name('chitietphim');

Route::get('chi-tiet-tin-tuc/{id}','PagesController@getChiTietTinTuc')->name('chitiettintuc');

Route::get('thongtintaikhoan','UserController@getThongTinTaiKhoan')->middleware('thanhvienLogin');
Route::post('thongtintaikhoan','UserController@postThongTinTaiKhoan')->name('thongtintaikhoan')
    ->middleware('thanhvienLogin');

Route::get('datve/{idSuatChieu}','PagesController@getDatve')->name('datve');

Route::get('giohang', 'PagesController@getGioHang');

Route::group(['prefix' => 'ajax'],function(){
	Route::post('loadsuatchieu','AjaxController@getSuatChieu');
	Route::post('loadghe','AjaxController@getGhe');
    Route::post('thanhtien','AjaxController@getThanhTien');
    Route::post('thongtinve','AjaxController@thongtinve');
    Route::group(['prefix' => 'cart'], function(){
        Route::post('add','AjaxController@addCart');
    });
});

/////////////////////////// Admin //////////////////////////
Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function(){
    Route::get('intro','PagesAdminController@getIntro');
    Route::resource('slide','SlideController');
    Route::resource('quyen','QuyenController');
    Route::resource('taikhoan','TaiKhoanController');
    Route::resource('theloaiphim','TheLoaiPhimController');
    Route::resource('phim','PhimController');
    Route::resource('tintuc','TinTucController');
    Route::resource('rap','RapController');
    Route::resource('ghe','GheController');
    Route::resource('suatchieu','SuatChieuController');
    Route::resource('danhgia','DanhGiaController');
    Route::resource('vedadat','BanVeController');
    Route::get('phanquyen','UserController@getPhanQuyen');
    Route::post('phanquyen','UserController@postPhanQuyen');
});
