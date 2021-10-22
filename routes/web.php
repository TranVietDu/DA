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
// Lien he
Route::get('/lienhe', function () {
    return view('lienhe');
});
// Ve chung toi
Route::get('/vechungtoi', function () {
    return view('vechungtoi');
});
Route::get('admin/home', function () {
    return view('admin.index');
});



