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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailSiswaController;
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

Route::get('/', [ProfileController::class, 'getdata'])->name('auth');

Route::get('/detailsiswa', [DetailSiswaController::class, 'getdata'])->name('detailsiswa');


Route::get('/', [AuthController::class, 'getdata'])->name('auth');

Route::post('/authLogin', [AuthController::class, 'login'])->name('authLogin');

Route::post('/admin/create', [AdminController::class, 'create'])->name('admin.create');

Route::post('/buku/create', [BukuController::class, 'create'])->name('buku.create');

Route::post('/buku/update', [BukuController::class, 'update'])->name('buku.update');

Route::post('/buku/delete', [BukuController::class, 'delete'])->name('buku.delete');

Route::post('/auth/update', [BukuController::class, 'update'])->name('auth.update');

Route::post('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::post('/siswa/update', [SiswaController::class, 'update'])->name('siswa.update');

Route::post('/siswa/delete', [SiswaController::class, 'delete'])->name('siswa.delete');
