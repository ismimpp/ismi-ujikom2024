<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [loginController::class, 'login']);
Route::get('/register', function(){
    return view("register");
});
Route::get('/data_produk', [ProdukController::class, 'produk']);

Route::get('/data_pelanggan', [PelangganController::class, 'pelanggan']);

Route::get('/data_penjualan', function(){
    return view("data_penjualan");
});
Route::get('/detail_penjualan', function(){
    return view("detail_penjualan");
});
Route::get('/home', function(){
    return view("home");
});
Route::get('/tambah_produk', function(){
    return view("tambah_produk");
});
Route::get('/tambah_pelanggan', function(){
    return view("tambah_pelanggan");
});
Route::get('/update_produk', [ProdukController::class, 'update']);

Route::get('/produk/{id}', [ProdukController::class, 'hapus']);

Route::get('/update_pelanggan', function(){
    return view("update_pelanggan");
});
Route::get('/penjualan', [PenjualanController::class, 'penjualan']);