<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\TindakanController;
use App\Http\Controllers\Api\TambahFavoritController;
use App\Http\Controllers\Api\DaftarBukuController;
use App\Http\Controllers\Api\DaftarFavoritController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', [LoginController::class, 'login']);

Route::post('register', [RegisterController::class, 'register']);

Route::post('tindakan', [TindakanController::class, 'tindakan']);

Route::post('tambahfavorit', [TambahFavoritController::class, 'tambahfavorit']);

Route::get('daftarbuku', [DaftarBukuController::class, 'daftarbuku']);

Route::post('daftarfavorit', [DaftarFavoritController::class, 'daftarfavorit']);

Route::post('history', [HistoryController::class, 'history']);

Route::post('profile', [ProfileController::class, 'profile']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
