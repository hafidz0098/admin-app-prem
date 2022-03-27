<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TambahAkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NetflixProsesController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/tambahdata', [TambahAkunController::class, 'index'])->middleware('auth');
Route::post('/tambahdata', [TambahAkunController::class, 'store'])->middleware('auth');

// Route::get('/order-proses', [AkunProsesController::class, 'index'])->middleware('auth');
// Route::put('/order-proses', [AkunProsesController::class, 'update'])->middleware('auth');
// Route::post('/order-proses', [AkunProsesController::class, 'update'])->middleware('auth');

Route::resource('/netflix/order-proses', '\App\Http\Controllers\NetflixProsesController')->middleware('auth');
Route::resource('/netflix/order-selesai', '\App\Http\Controllers\AkunSelesaiController')->middleware('auth');
