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
    return view('dashboard.index');
})->name('dashboard');
// tai khoan
Route::get('/taikhoan', function () {
    return view('taikhoan.index');
    })->name('taikhoan');
Route::get('/cttaikhoan', function () {
    return view('taikhoan.chitiet_taikhoan');
    })->name('cttaikhoan');
// san pham
Route::get('/sanpham', function () {
    return view('sanpham.index');
    })->name('sanpham');

Route::get('/themsp', function () {
    return view('sanpham.themmoi_sp');
    })->name('themsanpham');

Route::get('/suasanpham', function () {
    return view('sanpham.sua_sp');
    })->name('suasanpham');
    // mau
Route::get('/mau', function () {
    return view('mau.index');
    })->name('mau');

Route::get('/themmau', function () {
    return view('mau.themmau');
    })->name('themmau');

Route::get('/suamau', function () {
    return view('mau.sua_mau');
    })->name('suamau');
    
    // hang
Route::get('/hang', function () {
    return view('hang.index');
    })->name('hang');
    
Route::get('/themhang', function () {
    return view('hang.them_hang');
    })->name('themhang');

Route::get('/suahang', function () {
    return view('hang.sua_hang');
    })->name('suahang');
    // hoa don
Route::get('/hoadon', function () {
    return view('hoadon.index');
    })->name('hoadon');
    
Route::get('/cthoadon', function () {
    return view('cthoadon.index');
    })->name('cthoadon');

Route::get('/sologan', function () {
    return view('sologan.index');
    })->name('sologan');
    
Route::get('/gioithieu', function () {
    return view('gioithieu.index');
    })->name('gioithieu');

Route::get('/banner', function () {
    return view('banner.index');
    })->name('banner');

Route::get('/footerr', function () {
    return view('footerr.index');
    })->name('footerr');
    
Route::get('/logo', function () {
    return view('logo.index');
    })->name('logo');
    // slideshow
Route::get('/slideshow', function () {
    return view('slideshow.index');
    })->name('slideshow');

Route::get('/themowl', function () {
    return view('slideshow.them');
    })->name('themowl');

Route::get('/suaowl', function () {
    return view('slideshow.sua');
    })->name('suaowl');

Route::get('/binhluan', function () {
    return view('binhluan.index');
    })->name('binhluan');
    // loai san pham
Route::get('/loai', function () {
    return view('loai.index');
    })->name('loai');

Route::get('/themloai', function () {
    return view('loai.them_loai');
    })->name('themloai');

Route::get('/sualoai', function () {
    return view('loai.sua_loai');
    })->name('sualoai');
    //  dang nhap
Route::get('/dangnhap', function () {
    return view('dangnhap.index');
    })->name('dangnhap');


