<?php

namespace App\Http\Controllers;

use App\Http\Controllers\loginController;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function login(){
        return view("login");
    }
}
