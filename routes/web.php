<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\PklController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\DownloadController;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Perusahaan;
use App\Models\Absen;
use App\Models\Pkl;
use App\Models\Dokumentasi;

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
    Route::get('/welcome', 'welcome')->name('welcome')->middleware('auth');
});

Route::get('/', function () {
    return view('auth.log');
});

//ADMIN 
Route::resource('siswa',SiswaController::class)->middleware('auth');
Route::resource('jurusan',JurusanController::class)->middleware('auth');
Route::resource('perusahaan',PerusahaanController::class)->middleware('auth');
Route::resource('absen',AbsenController::class)->middleware('auth');
Route::resource('pkl',PklController::class)->middleware(['auth']);
Route::resource('dokumentasi',DokumentasiController::class)->middleware('auth');








