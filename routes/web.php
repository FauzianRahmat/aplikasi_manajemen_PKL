<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\AbsenController;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Perusahaan;
use App\Models\Absen;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('/log', 'log')->name('auth.log');
    Route::post('/store', 'store')->name('auth.store');
    Route::post('/authentication', 'authentication')->name('auth.authentication');
    Route::post('/logout', 'logout')->name('auth.logout');
    Route::get('/welcome', 'welcome')->name('welcome');
});

Route::get('/', function () {
    return view('auth.log');
});


Route::resource('siswa',SiswaController::class);

Route::resource('jurusan',JurusanController::class);

Route::resource('perusahaan',PerusahaanController::class);

Route::resource('absen',AbsenController::class);










