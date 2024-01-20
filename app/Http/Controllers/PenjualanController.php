<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    function penjualan(){
       $produk = DB::table("produk")->get();
       $pelanggan = DB::table("pelanggan")->get();

       $penjualan = DB::table("penjualan")->latest()->first();

       $idPenjualan = "";

       if(!$penjualan){ // kalau tidak ada Penjualan
           $idPenjualan = '1';
       }else{
        $idPenjualan = $penjualan->penjualanID;
       }

       return view("penjualan", ['idPenjualan'=> $idPenjualan,'produk' => $produk, 'pelanggan' => $pelanggan]);
    }

    function store(request $request){
        $penjualan = DB::table("penjualan")->insert([
            'PenjualanID' => $request->idPenjualan,
            'TanggalPenjualan' => date("Y-m-d"),
            'TotalHarga' => 0,
            'PelangganID' => $request->pelanggan,
            'status' => "pending"
        ]);

        
    }
}
