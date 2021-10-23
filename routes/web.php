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
    return view('index');
});
// Tao CV
Route::get('/tao-cv', function () {
        return view('tao-cv');
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





//Đăng kí, đăng nhập
Route::get('dangnhap', function () {
    return view('dangnhap');
});
Route::get('dangki', function () {
    return view('dangki');
});

// Admin
Route::get('admin/home', function () {
    return view('admin.index');
});
// user
Route::get('admin/user', function () {
    return view('admin.user.user');
});
Route::get('admin/user/add', function () {
    return view('admin.user.adduser');
});
// blog
Route::get('admin/blogs', function () {
    return view('admin.blogs.blog');
});




