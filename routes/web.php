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


Route::get('/', 'App\Http\Controllers\ViecLamController@index')->name('home');

// Tao CV
Route::get('/tao-cv', function () {
    return view('tao-cv');
});
// Tao tin tuyen dung
Route::group(['prefix' => 'tintuyendung', 'namespace'=>'App\Http\Controllers', 'as'=>'tintuyendung.'], function () {
    Route::get('/danhsach', 'TinTuyenDungController@index')->name('list');
    Route::get('/tao-tin-tuyen-dung', 'TinTuyenDungController@create')->name('create');
    Route::post('/tao-tin-tuyen-dung', 'TinTuyenDungController@store')->name('store');
    Route::get('/cap-nhat-tin-tuyen-dung/{id}', 'TinTuyenDungController@edit')->name('edit');
    Route::put('/cap-nhat-tin-tuyen-dung/{id}', 'TinTuyenDungController@update')->name('update');
    Route::get('/xoa-tin-tuyen-dung/{id}', 'TinTuyenDungController@destroy')->name('destroy');
    Route::get('/xoa-nhieu-tin-tuyen-dung', 'TinTuyenDungController@destroyall')->name('destroyall');
    Route::get('/khoi-phuc-tin-tuyen-dung', 'TinTuyenDungController@restore')->name('restore');
});
// Tao tin tim viec
Route::group(['prefix' => 'tintimviec', 'namespace'=>'App\Http\Controllers', 'as'=>'tintimviec.'], function () {
    Route::get('/danhsach', 'TinTimViecController@index')->name('list');
    Route::get('/tao-tin-tim-viec', 'TinTimViecController@create')->name('create');
    Route::post('/tao-tin-tim-viec', 'TinTimViecController@store')->name('store');
    Route::get('/cap-nhat-tin-tim-viec/{id}', 'TinTimViecController@edit')->name('edit');
    Route::put('/cap-nhat-tin-tim-viec/{id}', 'TinTimViecController@update')->name('update');
    Route::get('/xoa-tin-tim-viec/{id}', 'TinTimViecController@destroy')->name('destroy');
    Route::get('/xoa-nhieu-tin-tim-viec', 'TinTimViecController@destroyall')->name('destroyall');
    Route::get('/khoi-phuc-tin-tim-viec', 'TinTimViecController@restore')->name('restore');
});
// Viec lam
Route::get('/vieclam', function () {
    $username=Auth::user();
    return view('vieclam.vieclam',['username'=>$username]);
});
// Chi Tiet Viec lam
Route::get('/vieclam/chi-tiet-viec-lam', function () {
    return view('vieclam.chi-tiet-viec-lam');
});
// Blogs
Route::get('/blogs', function () {
    return view('blogs.blogs');
});
// Chi tiet Blogs
Route::get('/blog/chi-tiet-blog', function () {
    return view('blogs.chi-tiet-blog');
});
// Lien he
Route::get('/lienhe','App\Http\Controllers\LienHeController@index');
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
    Route::post('dangki', 'Authcontroller@register')->name('dangki');
    Route::get('dangnhap', 'Authcontroller@index')->name('relogin')->middleware('login');
    Route::post('dangnhap', 'Authcontroller@login')->name('login');
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
        Route::get('admin/user/search', 'UserController@search')->name('user.search');
        // Tintuyendung
        Route::get('admin/tintuyendung','TuyenDungController@index')->name('tintuyendung.index');
        Route::delete('admin/tintuyendung/{tintuyendung}','TuyenDungController@destroy')->name('tintuyendung.destroy');
        Route::get('admin/tintuyendung/{tintuyendung}/edit','TuyenDungController@edit')->name('tintuyendung.edit');
        // Tintimviec
        Route::get('admin/tintimviec','TimViecController@index')->name('tintimviec.index');
        Route::delete('admin/tintimviec/{tinTimViec}','TimViecController@destroy')->name('tintimviec.destroy');
        // Blogs
        Route::get('admin/blog','BlogController@index')->name('blog.index');
        Route::delete('admin/blog/{blog}','BlogController@destroy')->name('blog.destroy');
        // SLider
        Route::get('admin/slider','SliderController@index')->name('slider.index');
        Route::delete('admin/slider/{slider}','SliderController@destroy')->name('slider.destroy');
        Route::get('admin/slider/create','SliderController@create')->name('slider.create');
        Route::post('admin/slider','SliderController@store')->name('slider.store');
        Route::get('admin/slider/{slider}/edit','SliderController@edit')->name('slider.edit');
        Route::put('admin/slider/{slider}','SliderController@update')->name('slider.update');
    });
