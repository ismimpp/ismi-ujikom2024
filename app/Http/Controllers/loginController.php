<?php

namespace App\Http\Controllers;

use App\Http\Controllers\loginController;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\Hash;


class loginController extends Controller
{
    function login(){
       return view ('login');
    }

    function register(){
        return view ('register');
    }

    function home(){
        return view ('home');
    }

    function proseslogin(Request $request){

        $datalogin = $request->only("name", "password");
        if(Auth::attempt($datalogin)){

            return redirect('/home');
        }else{
            return redirect('/login')->with("error", "email atau password salah"); 
        }
    }

    function logout(){
        Auth::logout();

        return redirect ('/login');
    }

    function registrasi(request $request){
        $usn = $request->name;
        $email = $request->email;
        $pw = $request->password;

        DB::table('users')->insert([
            'name' => $usn,
            'email' => $email,
            'password' =>hash::make($pw),
        ]);
        return redirect('/login');
    }
}
