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

    //Viec lam Index
    Route::get('/', 'TinTuyenDungController@index')->name('home');

    // Viec lam
    Route::get('/vieclam', 'TinTuyenDungController@vieclam');
    // các viec làm đã ứng tuyển
    Route::get('/viec-lam-da-ung-tuyen', 'TinTuyenDungController@viec_lam_da_ung_tuyen')->name('vieclamungtuyen.list');
    //luu viec lam
    Route::post('vieclam/luu-viec-lam/{id}', 'TinTuyenDungController@luu_viec_lam');
    //cac viec lam da luu
    Route::get('vieclam/viec-lam-da-luu', 'TinTuyenDungController@viec_lam_da_luu')->name('vieclamdaluu.list');
    //xoa viec lam da luu
    Route::delete('vieclam/xoa-viec-lam-da-luu/{id}', 'TinTuyenDungController@xoa_viec_lam_da_luu')->name('vieclamdaluu.destroy');
    // Chi Tiet Viec lam
    Route::get('/vieclam/chi-tiet-viec-lam/{id}', 'TinTuyenDungController@chiTietViecLam');

    // filter vieclam
    Route::get('/vieclam/vieclamfilter', 'TinTuyenDungController@filter')->name('filter');

    Route::prefix('hoso')->group(function () {
        // Hoso
        Route::get('/', 'TinTimViecController@vieclamview')->name('hoso.view');
        //luu ho so
        Route::post('/luu-ho-so/{id}', 'TinTimViecController@luu_ho_so');
        //cac ho so da luu
        Route::get('/ho-so-da-luu', 'TinTimViecController@ho_so_da_luu')->name('hosodaluu.list');
        //xoa ho so da luu
        Route::delete('/xoa-ho-so-da-luu/{id}', 'TinTimViecController@xoa_ho_so_da_luu')->name('hosodaluu.destroy');
        // Chi tiet ho so
        Route::get('/chi-tiet-ho-so/{id}', 'TinTimViecController@chiTietHoSo')->name('hoso.chitiethoso');

        // filter hoso
        Route::get('/timviecfilter', 'TinTimViecController@filter')->name('timviecfiter');
    });

    //Blog
    Route::get('/blog', 'BlogController@blog');
    //Chi tiet Blog
    Route::get('/blog/chi-tiet-blog/{id}', 'BLogController@chiTietBlog');

    // Lien he
    Route::get('/lienhe', 'LienHeController@index');
    Route::post('/lienhe', 'LienHeController@dangYKien');

    //tim kiem viec lam va ho so
    Route::get('/tim-kiem', 'TinTuyenDungController@search');

    //cap nhat thong tin ca nhan
    Route::get('/cap-nhat-thong-tin/{id}', 'Admin\UserController@cap_nhat_thong_tin')->name('capnhatthongtin');
    Route::put('/cap-nhat-thong-tin/{id}', 'Admin\UserController@cap_nhat')->name('capnhat');

    //doi mat khau
    Route::get('/doi-mat-khau/{id}', 'Admin\UserController@doi_mat_khau_thong_tin')->name('doimatkhauthongtin');
    Route::put('/doi-mat-khau/{id}', 'Admin\UserController@doi_mat_khau')->name('doimatkhau');

    //quen mat khau
    Route::get('/quen-mat-khau', 'MailController@quen_mat_khau');
    Route::post('/khoi-phuc-mat-khau', 'MailController@khoi_phuc_mat_khau');
    Route::get('/cap-nhat-mat-khau-moi', 'MailController@mat_khau_moi');
    Route::post('/dat-lai-mat-khau', 'MailController@dat_lai_mat_khau');

    //dang nhap bang mang xa hoi
    Route::get('/auth/{provider}', 'AuthController@redirect');
    Route::get('dangnhap/{provider}/callback', 'AuthController@callback');

    // send mail
    Route::get('mail/{id}', 'MailController@index')->name('mail.index')->middleware('auth');
    Route::post('sendmail/{id}', 'MailController@sendmail')->name('mail.sendmail')->middleware('auth');

    //tim kiem blog
    Route::get('/tim-kiem-blog', 'BlogController@search');

    //binh luan blog
    Route::post('/blog/chi-tiet-blog/{id}', 'BLogController@postComment');
});

// Tao CV
Route::get('/tao-cv', function () {
    return view('tao-cv');
});
// Cv mau
Route::get('/cv-mau', function () {
    return view('cv_mau.phucvu');
});

// QUAN LI TIN TUYEN DUNG
Route::group(['prefix' => 'tintuyendung', 'namespace' => 'App\Http\Controllers', 'as' => 'tintuyendung1.', 'middleware' => ['auth']], function () {
    Route::get('/danhsach', 'TinTuyenDungController@list')->name('list');
    Route::get('/tao-tin-tuyen-dung', 'TinTuyenDungController@create')->name('create');
    Route::post('/tao-tin-tuyen-dung', 'TinTuyenDungController@store')->name('store');
    Route::get('/cap-nhat-tin-tuyen-dung/{id}', 'TinTuyenDungController@edit')->name('edit');
    Route::put('/cap-nhat-tin-tuyen-dung/{id}', 'TinTuyenDungController@update')->name('update');
    Route::delete('/xoa-tin-tuyen-dung/{id}', 'TinTuyenDungController@destroy')->name('destroy');
    Route::get('/xoa-nhieu-tin-tuyen-dung', 'TinTuyenDungController@destroyAll')->name('destroyall');
    Route::get('/thung-rac', 'TinTuyenDungController@tinTuyenDungTrash')->name('trash');
    Route::get('/khoi-phuc/{id}', 'TinTuyenDungController@tinTuyenDungUnTrash')->name('untrash');
    Route::delete('/xoa-vinh-vien/{id}', 'TinTuyenDungController@tinTuyenDungForceDelete')->name('forceDelete');
    Route::get('/khoi-phuc-tin-tuyen-dung', 'TinTuyenDungController@restore')->name('restore');
    Route::get('/vieclamut', 'TinTuyenDungController@viecLamUngTuyen')->name('vieclamdaungtuyen');
});

// QUAN LI TIN TIM VIEC
Route::group(['prefix' => 'tintimviec', 'namespace' => 'App\Http\Controllers', 'as' => 'tintimviec1.', 'middleware' => ['auth']], function () {
    Route::get('/danhsach', 'TinTimViecController@index')->name('list');
    Route::get('/tao-tin-tim-viec', 'TinTimViecController@create')->name('create');
    Route::post('/tao-tin-tim-viec', 'TinTimViecController@store')->name('store');
    Route::get('/cap-nhat-tin-tim-viec/{id}', 'TinTimViecController@edit')->name('edit');
    Route::put('/cap-nhat-tin-tim-viec/{id}', 'TinTimViecController@update')->name('update');
    Route::delete('/xoa-tin-tim-viec/{id}', 'TinTimViecController@destroy')->name('destroy');
    Route::get('/xoa-nhieu-tin-tim-viec', 'TinTimViecController@destroyAll')->name('destroyall');
    Route::get('/thung-rac', 'TinTimViecController@tinTimViecTrash')->name('trash');
    Route::get('/khoi-phuc/{id}', 'TinTimViecController@tinTimViecUnTrash')->name('untrash');
    Route::delete('/xoa-vinh-vien/{id}', 'TinTimViecController@tinTimViecForceDelete')->name('forceDelete');
    Route::get('/khoi-phuc-tin-tim-viec', 'TinTimViecController@restore')->name('restore');
});
// QUAN LI BLOG
Route::group(['prefix' => 'blog', 'namespace' => 'App\Http\Controllers', 'as' => 'blog1.', 'middleware' => 'auth'], function () {
    Route::get('/danhsach', 'BlogController@index')->name('list');
    Route::get('/viet-blog', 'BlogController@create')->name('create');
    Route::post('/viet-blog', 'BlogController@store')->name('store');
    Route::get('/cap-nhat-blog/{id}', 'BlogController@edit')->name('edit');
    Route::put('/cap-nhat-blog/{id}', 'BlogController@update')->name('update');
    Route::delete('/xoa-blog/{id}', 'BlogController@destroy')->name('destroy');
    Route::get('/xoa-nhieu-blog', 'BlogController@destroyAll')->name('destroyall');
    Route::get('/thung-rac', 'BlogController@blogTrash')->name('trash');
    Route::get('/khoi-phuc/{id}', 'BlogController@blogUnTrash')->name('untrash');
    Route::delete('/xoa-vinh-vien/{id}', 'BlogController@blogForceDelete')->name('forceDelete');
    Route::get('/khoi-phuc-blog', 'BlogController@restore')->name('restore');
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
    })->middleware('login');
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
        Route::get('admin/user/{user}/edit', 'UserController@edit')->name('user.edit');
        Route::put('admin/{user}', 'UserController@update')->name('user.update');
        Route::get('admin/user/search', 'UserController@search')->name('user.search');
        Route::get('admin/user/xembaituyen/{user}', 'UserController@viewposttuyendung')->name('user.viewtuyen');
        Route::get('admin/user/destroyall', 'UserController@destroyall')->name('user.destroyall');
        Route::get('admin/user/thungrac', 'UserController@recybin')->name('user.recybin');
        Route::delete('admin/user/xoavinhvien/{id}', 'UserController@xoavinhvien')->name('user.xoavinhvien');
        Route::get('admin/user/restore/{id}', 'UserController@restore')->name('user.restore');
        // Tintuyendung
        Route::get('admin/tintuyendung', 'TuyenDungController@index')->name('tintuyendung.index');
        Route::delete('admin/tintuyendung/{tintuyendung}', 'TuyenDungController@destroy')->name('tintuyendung.destroy');
        Route::get('admin/tintuyendung/{tintuyendung}/edit', 'TuyenDungController@edit')->name('tintuyendung.edit');
        Route::get('admin/tintuyendung/search', 'TuyenDungController@search')->name('tintuyendung.search');
        // Tintimviec
        Route::get('admin/tintimviec', 'TimViecController@index')->name('tintimviec.index');
        Route::delete('admin/tintimviec/{tinTimViec}', 'TimViecController@destroy')->name('tintimviec.destroy');
        Route::get('admin/tintimviec/search', 'TimViecController@search')->name('tintimviec.search');
        // Blogs
        Route::get('admin/blog', 'BlogController@index')->name('blog.index');
        Route::delete('admin/blog/{blog}', 'BlogController@destroy')->name('blog.destroy');
        // SLider
        Route::get('admin/slider', 'SliderController@index')->name('slider.index');
        Route::delete('admin/slider/{slider}', 'SliderController@destroy')->name('slider.destroy');
        Route::get('admin/slider/create', 'SliderController@create')->name('slider.create');
        Route::post('admin/slider', 'SliderController@store')->name('slider.store');
        Route::get('admin/slider/{slider}/edit', 'SliderController@edit')->name('slider.edit');
        Route::put('admin/slider/{slider}', 'SliderController@update')->name('slider.update');
        // Lien He
        Route::get('admin/lienhe', 'AdminLienHeController@index')->name('lienhe.index');
        Route::get('admin/lienhe/{lienhe}/edit', 'AdminLienHeController@edit')->name('lienhe.edit');
        Route::put('admin/lienhe/{lienhe}', 'AdminLienHeController@update')->name('lienhe.update');
        Route::delete('admin/lienhe/{lienhe}', 'AdminLienHeController@destroy')->name('lienhe.destroy');
        // Y Kien nguoi dung
        Route::get('admin/ykien', 'Ykiencontroller@index')->name('ykien.index');
        Route::delete('admin/ykien/{yKienNguoiDung}', 'Ykiencontroller@destroy')->name('ykien.destroy');
    });
});