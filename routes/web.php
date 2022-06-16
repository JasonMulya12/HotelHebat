<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\TipeKamarController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PDFController;



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
    return view('welcome');
});

Auth::routes();

Route::resource('tipekamar', TipeKamarController::class)->middleware(['auth', 'admin']);
Route::resource('fasilitaskamar', FasilitasKamarController::class)->middleware(['auth', 'admin']);
Route::resource('fasilitashotel', FasilitasHotelController::class)->middleware(['auth', 'admin']);
Route::resource('resepsionis', ResepsionisController::class)->middleware(['auth', 'admin']);
Route::resource('reservasi', ReservasiController::class)->middleware(['auth', 'resepsionis']);
Route::resource('pemesanan', PemesananController::class)->middleware(['auth', 'user']);
Route::resource('dashboard', DashboardController::class);
Route::get('myPDF/{id}', [PDFController::class, 'generatePDF'])->middleware(['auth', 'user']);
