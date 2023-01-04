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
    return view('beranda');
});

Route::get('/izin-belajar', function () {
    return view('user.izin-belajar.informasi');
});
Route::get('/tugas-belajar', function () {
    return view('user.tugas-belajar.informasi');
});

Route::get('/izin-belajar/pengajuan', function () {
    return view('user.izin-belajar.pengajuan');
});
Route::get('/tugas-belajar/pengajuan', function () {
    return view('user.tugas-belajar.pengajuan');
});
Route::get('/pengajuanku', function () {
    return view('user.pengajuanku');
});
Route::get('/profil', function () {
    return view('user.profil');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
