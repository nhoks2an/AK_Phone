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
    return view('user.index.index');
})->name('user');
Route::get('/sanpham', function () {
    return view('user.sanpham.index');
})->name('sanpham');
Route::get('/chitietsanpham', function () {
    return view('user.sanpham.detailproduct');
})->name('chitietsanpham');
Route::get('/lienhe', function () {
    return view('user.lienhe.index');
})->name('lienhe');
Route::get('/dangnhap', function () {
    return view('user.login.login');
})->name('dangnhap');
Route::get('/dangky', function () {
    return view('user.login.register');
})->name('dangky');
Route::get('/sanpham', function () {
    return view('user.sanpham.index');
})->name('sanpham');
Route::get('/giohang', function () {
    return view('user.cart.cart');
})->name('giohang');







Route::get('/admin/', function () {
    return view('dashboard.index');
})->name('dashboard');
// tai khoan
Route::get('/admin/taikhoan', function () {
    return view('taikhoan.index');
    })->name('taikhoan');
Route::get('/admin/cttaikhoan', function () {
    return view('taikhoan.chitiet_taikhoan');
    })->name('cttaikhoan');
// san pham
Route::get('/admin/sanpham', function () {
    return view('sanpham.index');
    })->name('sanpham');

Route::get('/admin/themsp', function () {
    return view('sanpham.themmoi_sp');
    })->name('themsanpham');

Route::get('/admin/suasanpham', function () {
    return view('sanpham.sua_sp');
    })->name('suasanpham');
    // mau
Route::get('/admin/mau', function () {
    return view('mau.index');
    })->name('mau');

Route::get('/admin/themmau', function () {
    return view('mau.themmau');
    })->name('themmau');

Route::get('/admin/suamau', function () {
    return view('mau.sua_mau');
    })->name('suamau');
    
    // hang
Route::get('/admin/hang', function () {
    return view('hang.index');
    })->name('hang');
    
Route::get('/admin/themhang', function () {
    return view('hang.them_hang');
    })->name('themhang');

Route::get('/admin/suahang', function () {
    return view('hang.sua_hang');
    })->name('suahang');
    // hoa don
Route::get('/admin/hoadon', function () {
    return view('hoadon.index');
    })->name('hoadon');
    
Route::get('/admin/cthoadon', function () {
    return view('cthoadon.index');
    })->name('cthoadon');

Route::get('/admin/sologan', function () {
    return view('sologan.index');
    })->name('sologan');
    
Route::get('/admin/gioithieu', function () {
    return view('gioithieu.index');
    })->name('gioithieu');

Route::get('/admin/banner', function () {
    return view('banner.index');
    })->name('banner');

Route::get('/admin/footerr', function () {
    return view('footerr.index');
    })->name('footerr');
    
Route::get('/admin/logo', function () {
    return view('logo.index');
    })->name('logo');
    // slideshow
Route::get('/admin/slideshow', function () {
    return view('slideshow.index');
    })->name('slideshow');

Route::get('/admin/themowl', function () {
    return view('slideshow.them');
    })->name('themowl');

Route::get('/admin/suaowl', function () {
    return view('slideshow.sua');
    })->name('suaowl');

Route::get('/admin/binhluan', function () {
    return view('binhluan.index');
    })->name('binhluan');
    // loai san pham
Route::get('/admin/loai', function () {
    return view('loai.index');
    })->name('loai');

Route::get('/admin/themloai', function () {
    return view('loai.them_loai');
    })->name('themloai');

Route::get('/admin/sualoai', function () {
    return view('loai.sua_loai');
    })->name('sualoai');
    //  dang nhap
Route::get('/admin/dangnhap', function () {
    return view('dangnhap.index');
    })->name('dangnhap');


