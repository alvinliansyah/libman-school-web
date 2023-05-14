<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\PelayananPelangganController;
use App\Http\Controllers\TentangAplikasiController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', [DashboardController::class, 'getdata'])->name('dashboard');

Route::get('/siswa', [SiswaController::class, 'getdata'])->name('siswa');

Route::get('/admin', [AdminController::class, 'getdata'])->name('admin');

Route::get('/buku', [BukuController::class, 'getdata'])->name('buku');

Route::get('/peminjaman', [PeminjamanController::class, 'getdata'])->name('peminjaman');

Route::get('/pengembalian', [PengembalianController::class, 'getdata'])->name('pengembalian');

Route::get('/riwayat', [RiwayatController::class, 'getdata'])->name('riwayat');

Route::get('/pelayananpelanggan', [PelayananPelangganController::class, 'getdata'])->name('pelayananpelanggan');

Route::get('/tentangaplikasi', [TentangAplikasiController::class, 'getdata'])->name('tentangaplikasi');

Route::get('/profile', [ProfileController::class, 'getdata'])->name('profile');