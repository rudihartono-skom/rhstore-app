<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\BarangmasukController;

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


Route::get('/', [KonsumenController::class, 'index']);

Auth::routes();
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/inputproduk', [ProdukController::class, 'create']);
Route::post('/saveproduk', [ProdukController::class, 'store']);
Route::get('/editproduk/{id}', [ProdukController::class, 'edit']);
Route::put('/updateproduk/{id}', [ProdukController::class, 'update']);
Route::delete('/deleteproduk/{id}', [ProdukController::class, 'destroy']);

Route::get('/b_masuk', [BarangmasukController::class, 'index']);
Route::get('/inputbmasuk', [BarangmasukController::class, 'create']);
Route::post('/savebmasuk', [BarangmasukController::class, 'store']);
Route::get('/editbmasuk/{id}', [BarangmasukController::class, 'edit']);
Route::put('/updatebmasuk/{id}', [BarangmasukController::class, 'update']);
Route::delete('/deletebmasuk/{id}', [BarangmasukController::class, 'destroy']);
