<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinTuyenDung;
use Illuminate\Support\Facades\Auth;

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
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'ViecLamController@index')->name('home');
    // Viec lam
    Route::get('vieclam', 'ViecLamController@vieclam');

    // Chi Tiet Viec lam
    Route::get('vieclam/chi-tiet-viec-lam/{id}', 'ViecLamController@chitietvieclam');

    //Blog
    Route::get('blog', 'BlogController@blog');

    Route::get('blog', 'BlogController@blogganday');
    //Chi tiet Blog
    Route::get('/blog/chi-tiet-blog/{id}', 'BLogController@chitietblog');

    // Lien he
    Route::get('/lienhe','LienHeController@index');
    //tim kiem
    Route::get('/tim-kiem','ViecLamController@search');

    Route::get('/tim-kiem-blog','BlogController@search');
});

// Tao CV
Route::get('/tao-cv', function () {
    return view('tao-cv');
});


// QUAN LI TIN TUYEN DUNG
Route::group(['prefix' => 'tintuyendung', 'namespace'=>'App\Http\Controllers', 'as'=>'tintuyendung.','middleware'=>'auth'], function () {
    Route::get('/danhsach', 'TinTuyenDungController@index')->name('list');
    Route::get('/tao-tin-tuyen-dung', 'TinTuyenDungController@create')->name('create');
    Route::post('/tao-tin-tuyen-dung', 'TinTuyenDungController@store')->name('store');
    Route::get('/cap-nhat-tin-tuyen-dung/{id}', 'TinTuyenDungController@edit')->name('edit');
    Route::put('/cap-nhat-tin-tuyen-dung/{id}', 'TinTuyenDungController@update')->name('update');
    Route::get('/xoa-tin-tuyen-dung/{id}', 'TinTuyenDungController@destroy')->name('destroy');
    Route::get('/xoa-nhieu-tin-tuyen-dung', 'TinTuyenDungController@destroyall')->name('destroyall');
    Route::get('/khoi-phuc-tin-tuyen-dung', 'TinTuyenDungController@restore')->name('restore');
});
// QUAN LI TIN TIM VIEC
Route::group(['prefix' => 'tintimviec', 'namespace'=>'App\Http\Controllers', 'as'=>'tintimviec.','middleware'=>'auth'], function () {
    Route::get('/danhsach', 'TinTimViecController@index')->name('list');
    Route::get('/tao-tin-tim-viec', 'TinTimViecController@create')->name('create');
    Route::post('/tao-tin-tim-viec', 'TinTimViecController@store')->name('store');
    Route::get('/cap-nhat-tin-tim-viec/{id}', 'TinTimViecController@edit')->name('edit');
    Route::put('/cap-nhat-tin-tim-viec/{id}', 'TinTimViecController@update')->name('update');
    Route::get('/xoa-tin-tim-viec/{id}', 'TinTimViecController@destroy')->name('destroy');
    Route::get('/xoa-nhieu-tin-tim-viec', 'TinTimViecController@destroyall')->name('destroyall');
    Route::get('/khoi-phuc-tin-tim-viec', 'TinTimViecController@restore')->name('restore');
});

// QUAN LI BLOG
Route::group(['prefix' => 'blog', 'namespace'=>'App\Http\Controllers', 'as'=>'blog.','middleware'=>'auth'], function () {
    Route::get('/danhsach', 'BlogController@index')->name('list');
    Route::get('/viet-blog', 'BlogController@create')->name('create');
    Route::post('/viet-blog', 'BlogController@store')->name('store');
    Route::get('/cap-nhat-blog/{id}', 'BlogController@edit')->name('edit');
    Route::put('/cap-nhat-blog/{id}', 'BlogController@update')->name('update');
    Route::get('/xoa-blog/{id}', 'BlogController@destroy')->name('destroy');
    Route::get('/xoa-nhieu-blog', 'BlogController@destroyall')->name('destroyall');
    Route::get('/khoi-phuc-blog', 'BlogController@restore')->name('restore');
});


// Cv mau
Route::get('/cv-mau', function () {
    return view('cv_mau.phucvu');
});




// admin
Route::get('admin/home', function () {
    return view('admin.index');
});
Route::get('admin/user/adduser', function () {
    return view('admin.user.adduser');
});


//dang nhap
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('dangki', function () {
        return view('dangki');
    });

    Route::get('dangnhap', 'Authcontroller@index')->name('relogin')->middleware('login');
    Route::post('dangnhap', 'Authcontroller@login')->name('login');
    Route::post('dangki', 'Authcontroller@register')->name('dangki');
    Route::get('logout', 'Authcontroller@logout')->name('logout');
    Route::get('admin/home', 'Authcontroller@indexhome')->name('adminhome')->middleware('admin');
});
// Admin
    Route::namespace('App\Http\Controllers\Admin')->group(function () {
        // User
        Route::get('admin/user', 'UserController@index')->name('user.index');
        Route::delete('admin/user/{user}', 'UserController@destroy')->name('user.destroy');
        Route::get('admin/user/create', 'UserController@create')->name('user.create');
        Route::post('admin/user', 'UserController@store')->name('user.store');
        Route::get('admin/user/{user}/edit','UserController@edit')->name('user.edit');
        Route::put('admin/{user}','UserController@update')->name('user.update');
        // Tintuyendung
        Route::get('admin/tintuyendung','TuyenDungController@index')->name('tintuyendung.index');
        Route::delete('admin/tintuyendung/{tintuyendung}','TuyenDungController@destroy')->name('tintuyendung.delete');
        // Tintimviec
        Route::get('admin/tintimviec','TimViecController@index')->name('tintimviec.index');
    });
