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

Route::group(['namespace' => 'App\Http\Controllers'], function () {

    //cap nhat thong tin ca nhan
    Route::get('/cap-nhat-thong-tin/{id}', 'Admin\UserController@capnhatthongtin')->name('capnhatthongtin');
    Route::put('/cap-nhat-thong-tin/{id}', 'Admin\UserController@capnhat')->name('capnhat');

    //doi mat khau
    Route::get('/doi-mat-khau/{id}', 'Admin\UserController@doimatkhauthongtin')->name('doimatkhauthongtin');
    Route::put('/doi-mat-khau/{id}', 'Admin\UserController@doimatkhau')->name('doimatkhau');

    //quen mat khau
    Route::get('/quen-mat-khau', 'MailController@quen_mat_khau');
    Route::post('/khoi-phuc-mat-khau', 'MailController@khoi_phuc_mat_khau');
    Route::get('/cap-nhat-mat-khau-moi', 'MailController@mat_khau_moi');
    Route::post('/dat-lai-mat-khau', 'MailController@dat_lai_mat_khau');
    //dang nhap bang mang xa hoi
    Route::get('/auth/{provider}', 'AuthController@redirect');
    Route::get('dangnhap/{provider}/callback', 'AuthController@callback');
    // send mail
    Route::get('mail/{id}','MailController@index')->name('mail.index')->middleware('auth');
    Route::post('sendmail','MailController@sendmail')->name('mail.sendmail')->middleware('auth');
    //Viec lam Index
    Route::get('/', 'TinTuyenDungController@index')->name('home');
    // Viec lam
    Route::get('vieclam', 'TinTuyenDungController@vieclam');

    // Chi Tiet Viec lam
    Route::get('vieclam/chi-tiet-viec-lam/{id}', 'TinTuyenDungController@chitietvieclam');

    // Hoso
    Route::get('hoso','TinTimViecController@vieclamview')->name('hoso.view');
    // Chi tiet ho so
    Route::get('hoso/chi-tiet-ho-so/{id}', 'TinTimViecController@chitiethoso')->name('hoso.chitiethoso');

    //Blog
    Route::get('blog', 'BlogController@blog');

    //3 Blog trang Blog
    Route::get('blog', 'BlogController@blogxemnhieu');

    //Chi tiet Blog
    Route::get('/blog/chi-tiet-blog/{id}', 'BLogController@chitietblog');

    // Lien he
    Route::get('/lienhe','LienHeController@index');

    Route::post('/lienhe','LienHeController@postYKien');

    //tim kiem viec lam
    Route::get('/tim-kiem','TinTuyenDungController@search');

    // //tim kiem ho so
    // Route::get('/tim-kiem','TinTimViecController@search');

    //tim kiem blog
    Route::get('/tim-kiem-blog','BlogController@search');

    Route::post('/blog/chi-tiet-blog/{id}', 'BLogController@postComment');

});

// Tao CV
Route::get('/tao-cv', function () {
    return view('tao-cv');
});

// qltaikhoan

// QUAN LI TIN TUYEN DUNG
Route::group(['prefix' => 'tintuyendung', 'namespace'=>'App\Http\Controllers', 'as'=>'tintuyendung1.','middleware'=>['auth','checktuyendung']], function () {
    Route::get('/danhsach', 'TinTuyenDungController@list')->name('list');
    Route::get('/tao-tin-tuyen-dung', 'TinTuyenDungController@create')->name('create');
    Route::post('/tao-tin-tuyen-dung', 'TinTuyenDungController@store')->name('store');
    Route::get('/cap-nhat-tin-tuyen-dung/{id}', 'TinTuyenDungController@edit')->name('edit');
    Route::put('/cap-nhat-tin-tuyen-dung/{id}', 'TinTuyenDungController@update')->name('update');
    Route::delete('/xoa-tin-tuyen-dung/{id}', 'TinTuyenDungController@destroy')->name('destroy');
    Route::get('/xoa-nhieu-tin-tuyen-dung', 'TinTuyenDungController@destroyall')->name('destroyall');
    Route::get('/khoi-phuc-tin-tuyen-dung', 'TinTuyenDungController@restore')->name('restore');
});
// filter vieclam
Route::get('vieclam/vieclamfilter','App\Http\Controllers\TinTuyenDungController@filter')->name('filter');
// filter timviec
Route::get('hoso/timviecfilter','App\Http\Controllers\TinTimViecController@filter')->name('timviecfiter');
// QUAN LI TIN TIM VIEC
Route::group(['prefix' => 'tintimviec', 'namespace'=>'App\Http\Controllers', 'as'=>'tintimviec1.','middleware'=>['auth', 'checktimviec']], function () {
    Route::get('/danhsach', 'TinTimViecController@index')->name('list');
    Route::get('/tao-tin-tim-viec', 'TinTimViecController@create')->name('create');
    Route::post('/tao-tin-tim-viec', 'TinTimViecController@store')->name('store');
    Route::get('/cap-nhat-tin-tim-viec/{id}', 'TinTimViecController@edit')->name('edit');
    Route::put('/cap-nhat-tin-tim-viec/{id}', 'TinTimViecController@update')->name('update');
    Route::delete('/xoa-tin-tim-viec/{id}', 'TinTimViecController@destroy')->name('destroy');
    Route::get('/xoa-nhieu-tin-tim-viec', 'TinTimViecController@destroyall')->name('destroyall');
    Route::get('/khoi-phuc-tin-tim-viec', 'TinTimViecController@restore')->name('restore');
});

// QUAN LI BLOG
Route::group(['prefix' => 'blog', 'namespace'=>'App\Http\Controllers', 'as'=>'blog1.','middleware'=>'auth'], function () {
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
        return view('dangki');})->middleware('login');;
    Route::get('dangnhap', 'AuthController@index')->name('relogin')->middleware('login');
    Route::post('dangnhap', 'AuthController@login')->name('login')->middleware('login');
    Route::post('dangki', 'AuthController@register')->name('dangki')->middleware('login');
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::get('admin/home', 'AuthController@indexhome')->name('adminhome')->middleware('admin');
});
// Admin
Route::middleware(['admin'])->group(function () {
    Route::namespace('App\Http\Controllers\Admin')->group(function () {
        // User
        Route::get('admin/user', 'UserController@index')->name('user.index');
        Route::delete('admin/user/{user}', 'UserController@destroy')->name('user.destroy');
        Route::get('admin/user/create', 'UserController@create')->name('user.create');
        Route::post('admin/user', 'UserController@store')->name('user.store');
        Route::get('admin/user/{user}/edit','UserController@edit')->name('user.edit');
        Route::put('admin/{user}','UserController@update')->name('user.update');
        Route::get('admin/user/search', 'UserController@search')->name('user.search');
        Route::get('admin/user/xembaituyen/{user}','UserController@viewposttuyendung')->name('user.viewtuyen');
        Route::get('admin/user/xembaitim/{user}','UserController@viewposttimviec')->name('user.viewtim');
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
        // Lien He
        Route::get('admin/lienhe','AdminLienHeController@index')->name('lienhe.index');
        Route::get('admin/lienhe/{lienhe}/edit','AdminLienHeController@edit')->name('lienhe.edit');
        Route::put('admin/lienhe/{lienhe}','AdminLienHeController@update')->name('lienhe.update');
        Route::delete('admin/lienhe/{lienhe}','AdminLienHeController@destroy')->name('lienhe.destroy');

        // Y Kien nguoi dung
        Route::get('admin/ykien','Ykiencontroller@index')->name('ykien.index');
        Route::delete('admin/ykien/{yKienNguoiDung}','Ykiencontroller@destroy')->name('ykien.destroy');

    });
});
