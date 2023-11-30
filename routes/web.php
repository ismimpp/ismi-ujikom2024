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
