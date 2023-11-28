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
Route::get('/home', function(){
    return view("home");
});
