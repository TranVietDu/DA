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
    return view('vieclam');
});
// Chi Tiet Viec lam
Route::get('/chi-tiet-viec-lam', function () {
    return view('chi-tiet-viec-lam');
});
// Blogs
Route::get('/blogs', function () {
    return view('blogs.blogs');
});
// Chi tiet Blogs
Route::get('/chi-tiet-blog', function () {
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
Route::get('admin/user', function () {
    return view('admin.user.user');
});
Route::get('admin/user/adduser', function () {
    return view('admin.user.adduser');
});



