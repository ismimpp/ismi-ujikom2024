<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [loginController::class, 'login']);
Route::get('/register', function(){
    return view("register");
});
Route::get('/data_produk', function(){
    return view("data_produk");
});
Route::get('/data_pelanggan', function(){
    return view("data_pelanggan");
});
Route::get('/data_penjualan', function(){
    return view("data_penjualan");
});
Route::get('/home', function(){
    return view("home");
});