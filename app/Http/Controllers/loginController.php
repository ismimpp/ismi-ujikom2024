<?php

namespace App\Http\Controllers;

use App\Http\Controllers\loginController;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function login(){
        $login = "login";
        return view("/login", ['login' =>$login]);
    }

    function proseslogin(Request $request){
        $request->validate([
            'email'=> 'required|min:2',
            'password'=> 'required|min:2',
        ]);

        $datalogin = $request->only("email", "password");
        if(Auth::attemp($datalogin)){

            return redirect('/home');
        }else{
            return redirect('/login')->width("error", "email atau password salah"); 
        }
    }
}
