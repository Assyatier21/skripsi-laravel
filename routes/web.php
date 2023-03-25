<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DocumentGeneratorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\IzinBelajarUserController;
use App\Http\Controllers\IzinBelajarAdminController;
use App\Http\Controllers\TugasBelajarUserController;
use App\Http\Controllers\TugasBelajarAdminController;

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

Route::get('/', [IndexController::class, 'guest_dashboard'])->name('guest.dashboard');

Route::get('/login', [LoginController::class, 'get_login'])->name('user.login');
Route::post('/login', [LoginController::class, 'login'])->name('user.post.login');

Route::get('/admin/login', [AdminAuthController::class, 'get_login'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.post.login');

Route::middleware(['auth'])->group(function () {
    //--------------[ ROUTE NAVBAR ]-------------//
    Route::get('/beranda', [IndexController::class, 'index'])->name('user.beranda');
    Route::get('/pengajuanku', [IndexController::class, 'pengajuanku'])->name('user.pengajuanku');
    Route::get('/notifikasi', [IndexController::class, 'notifikasi'])->name('user.notifikasi');
    Route::get('/profil', [IndexController::class, 'profil'])->name('user.profil');
    Route::post('/profil', [IndexController::class, 'update_profil'])->name('user.update.profil');
    //--------------[ ROUTE NAVBAR ]-------------//

    //--------------[ ROUTE IZIN BELAJAR ]-------------//
    Route::get('/izin-belajar', [IzinBelajarUserController::class, 'informasi'])->name('user.izin-belajar.informasi');
    Route::get('/izin-belajar/pengajuan', [IzinBelajarUserController::class, 'pengajuan'])->name('user.izin-belajar.pengajuan');
    Route::post('/izin-belajar/pengajuan', [IzinBelajarUserController::class, 'store_pengajuan'])->name('user.izin-belajar.store');
    Route::get('/izin-belajar/edit/{id}', [IzinBelajarUserController::class, 'sunting'])->name('user.izin-belajar.edit');
    Route::put('/izin-belajar/edit/{id}', [IzinBelajarUserController::class, 'update_sunting'])->name('user.izin-belajar.update');
    //--------------[ ROUTE IZIN BELAJAR ]-------------//

    //--------------[ ROUTE TUGAS BELAJAR ]-------------//
    Route::get('/tugas-belajar', [TugasBelajarUserController::class, 'informasi'])->name('user.tugas-belajar.informasi');
    Route::get('/tugas-belajar/pengajuan', [TugasBelajarUserController::class, 'pengajuan'])->name('user.tugas-belajar.pengajuan');
    Route::post('/tugas-belajar/pengajuan', [TugasBelajarUserController::class, 'store_pengajuan'])->name('user.tugas-belajar.store');
    Route::get('/tugas-belajar/edit/{id}', [TugasBelajarUserController::class, 'sunting'])->name('user.tugas-belajar.edit');
    Route::put('/tugas-belajar/edit/{id}', [TugasBelajarUserController::class, 'update_sunting'])->name('user.tugas-belajar.update');
    //--------------[ ROUTE TUGAS BELAJAR ]-------------//

    //--------------[ ROUTE DOCS GENERATED ]-------------//
    Route::get('/download-ib/{id}', [DocumentGeneratorController::class, 'download_ib'])->name('download.ib');
    Route::get('/download-tb/{id}', [DocumentGeneratorController::class, 'download_tb'])->name('download.tb');
    Route::get('/surat-abk/{id}', [DocumentGeneratorController::class, 'surat_abk'])->name('user.surat.abk');
    Route::get('/surat-permohonan-ib/{id}', [DocumentGeneratorController::class, 'surat_permohonan_ib'])->name('user.surat_permohonan.ib');
    Route::get('/surat-pembebasan-tb/{id}', [DocumentGeneratorController::class, 'surat_pembebasan_tb'])->name('user.surat_pembebasan.tb');
    Route::get('/surat-rekomendasi-tubel/{id}', [DocumentGeneratorController::class, 'surat_rekomendasi_tubel'])->name('user.surat_rekomendasi.tubel');
    Route::get('/surat-ib/1/{id}', [DocumentGeneratorController::class, 'ib_1'])->name('user.ib.1');
    Route::get('/surat-ib/2/{id}', [DocumentGeneratorController::class, 'ib_2'])->name('user.ib.2');
    Route::get('/surat-ib/3/{id}', [DocumentGeneratorController::class, 'ib_3'])->name('user.ib.3');
    //--------------[ ROUTE DOCS GENERATED ]-------------//

    Route::post('/logout', [LoginController::class, 'logout'])->name('user.logout');
});

Route::prefix('admin')->group(function () {
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/beranda', [IndexAdminController::class, 'index'])->name('admin.beranda');

        Route::get('/izin-belajar', [IzinBelajarAdminController::class, 'index'])->name('admin.izin-belajar.index');
        Route::get('/izin-belajar/verifikasi/{id}', [IzinBelajarAdminController::class, 'verifikasi'])->name('admin.izin-belajar.verifikasi');
        Route::put('/izin-belajar/verifikasi/{id}', [IzinBelajarAdminController::class, 'update_verifikasi'])->name('admin.izin-belajar.update');

        Route::get('/tugas-belajar', [TugasBelajarAdminController::class, 'index'])->name('admin.tugas-belajar.index');
        Route::get('/tugas-belajar/verifikasi/{id}', [TugasBelajarAdminController::class, 'verifikasi'])->name('admin.tugas-belajar.verifikasi');
        Route::put('/tugas-belajar/verifikasi/{id}', [TugasBelajarAdminController::class, 'update_verifikasi'])->name('admin.tugas-belajar.update');

        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});
