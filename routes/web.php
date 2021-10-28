<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinTuyenDung;
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
    return view('index');
})->name('home');
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
    Route::get('/khoi-phuc-tin-tuyen-dung', 'TinTuyenDungController@restore')->name('restore');
});
// Tao tin tim viec
Route::group(['prefix' => 'tintimviec'], function () {
    Route::get('/tao-tin-tim-viec', function ()    {
        return view('tintimviec.tao-tin-tim-viec');
    });

    Route::get('/quan-li-tin', function ()    {
        return view('tintimviec.quan-li-tin');
    });
});
// Viec lam
Route::get('/vieclam', function () {
    return view('vieclam.vieclam');
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
Route::get('/lienhe', function () {
    return view('lienhe');
});
// Ve chung toi
Route::get('/vechungtoi', function () {
    return view('vechungtoi');
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
        Route::get('admin/user', 'UserController@index')->name('user.index');
        Route::delete('admin/user/{user}', 'UserController@destroy')->name('user.destroy');
        Route::get('admin/user/create', 'UserController@create')->name('user.create');
        Route::post('admin/user', 'UserController@store')->name('user.store');
        Route::get('admin/user/{user}/edit','UserController@edit')->name('user.edit');
        Route::put('admin/{user}','UserController@update')->name('user.update');
    });
