<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [homeController::class, 'home']);
Route::get('/login', [loginController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

//produk
Route::get('/tambah_produk', [ProdukController::class, 'produk2']);
Route::post('/tambah_produk', [ProdukController::class, 'proses_tambahproduk']);
Route::get('/data_produk/hapus/{id}', [ProdukController::class, 'hapus']);
Route::get('/data_produk/update_produk/{id}', [ProdukController::class, 'update']);
Route::post('/update_produk/{id}', [ProdukController::class, 'proses_updateproduk']);
Route::get('/data_produk', [ProdukController::class, 'produk']);

//pelanggan
Route::get('/tambah_pelanggan', [PelangganController::class, 'tambah_pelanggan']);
Route::post('/tambah_pelanggan', [PelangganController::class, 'proses_tambahpelanggan']);
Route::get('/data_pelanggan/hapus/{id}', [PelangganController::class, 'hapus']);
Route::get('/data_pelanggan/update_pelanggan{id}', [PelangganController::class, 'update']);
Route::post('/update_pelanggan/{id}', [PelangganController::class, 'proses_updatepelanggan']);
Route::get('/data_pelanggan', [PelangganController::class, 'pelanggan']);

//penjualan
Route::get('/data_penjualan', [PenjualanController::class, 'data_penjualan']);
Route::get('/detail_penjualan', [PenjualanController::class, 'detail_penjualan']);
Route::get('/penjualan', [PenjualanController::class, 'penjualan']);
Route::post('/tambahpenjualan', [PenjualanController::class, 'store']);
Route::post('/checkout', [PenjualanController::class, 'checkout']);
// Route::post('/checkout', function(){return "checkout";});