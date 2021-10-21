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
// CV phuc vu
Route::prefix('cv_mau')->group(function () {
    Route::get('/phucvu', function () {
        return view('cv_mau.phucvu');
    });
    // Tao CV
Route::prefix('tao_cv')->group(function () {
    Route::get('/cv', function () {
        return view('tao_cv.cv');
    });
});
});

// Cong viec theo ca
Route::prefix('theoca')->group(function () {
    Route::get('/sang', function () {
        return view('theoca.sang');
    });
});

// Cong viec theo nghe
Route::prefix('theonghe')->group(function () {
    Route::get('/phucvu', function () {
        return view('theonghe.phucvu');
    });
});

// Cong viec theo vung
Route::prefix('theovung')->group(function () {
    Route::get('/haichau', function () {
        return view('theovung.haichau');
    });
});
// Ve chung toi
Route::get('/vechungtoi', function () {
    return view('vechungtoi');
});



