<?php

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Kecamatan;
use App\Http\Controllers\C_Kota;
use App\Http\Controllers\C_KotaDropdown;
use App\Http\Controllers\C_Registrasi_Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [C_Home::class, 'index']);

// Dashboard
Route::get('/dashboard/home', [C_Home::class, 'index'])->name('dashboard.home');

// Registrasi Paket
Route::get('/registrasi/home_10', [C_Registrasi_Home::class, 'Home_10'])->name('registrasi.home_10');
Route::get('/registrasi/home_20', [C_Registrasi_Home::class, 'Home_20'])->name('registrasi.home_20');
Route::get('/registrasi/home_30', [C_Registrasi_Home::class, 'Home_30'])->name('registrasi.home_30');
Route::get('/registrasi/home_50', [C_Registrasi_Home::class, 'Home_50'])->name('registrasi.home_50');
Route::get('/registrasi/home_100', [C_Registrasi_Home::class, 'Home_100'])->name('registrasi.home_100');

// Registrasi Select2 Kota/Kabupaten, Kecamatan & Kelurahan
Route::get('/kecamatan/{id}', [C_Registrasi_Home::class, 'getKecamatan'])->name('kecamatan.home');
Route::get('/kelurahan/{id}', [C_Registrasi_Home::class, 'getKelurahan'])->name('kelurahan.home');
