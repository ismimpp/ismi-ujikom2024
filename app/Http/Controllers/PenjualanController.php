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

        if($penjualan->status == "selesai"){
            $idPenjualan = $penjualan->penjualanID + 1;
        }else{
            $idPenjualan = $penjualan->penjualanID;
        }
       }

       $detailpenjualan = DB::table("detailpenjualan")->where("penjualanID", $idPenjualan)
       ->join("produk", "detailpenjualan.ProdukID", "=", "produk.ProdukID")
       ->get();
       //return $detailpenjualan

       return view("penjualan", ['idPenjualan'=> $idPenjualan,'detailpenjualan'=> $detailpenjualan, 'produk' => $produk, 'pelanggan' => $pelanggan]);
    }

    function store(request $request){


    $produk = DB::table('produk')->where('ProdukID', $request->produk)->first();
    // return $produk;
    $DataPenjualan = DB::table('penjualan')->where('penjualanID', $request->idPenjualan)->first();
    if(!$DataPenjualan){ //kalau tidak ada penjualan

        $penjualan = DB::table("penjualan")->insert([
            'penjualanID' => $request->idPenjualan,
            'TanggalPenjualan' => date("Y-m-d"),
            'TotalHarga' => 0,
            'PelangganID' => $request->pelanggan,
            'status' => "pending"
        ]);
    }

    if($produk->Stock - $request->qty < 0 ){
        return redirect()->back()->with("info","stock tidak mencukupi");
    }else{
        $detailpenjualan = DB::table("detailpenjualan")->insert([
            'PenjualanID' => $request->idPenjualan,
            'ProdukID' => $request->produk,
            'JumlahProduk' => $request->qty,
            'SubTotal' => $request->qty * $produk->Harga
        ]);
        DB::table("produk")->where('produkID', $request->produk)->update(['Stock'=> $produk->Stock - $request->qty]);

        return redirect()->back();
    }

    }

    function checkout(Request $request){

        // return "checkout";
        $updateData = DB::table("penjualan")->where("penjualanID", $request->idPenjualan)->update([
            'status' => "selesai",
            'TotalHarga' => $request->totalharga
        ]);

        if($updateData){
            return redirect()->back()->with("info", "Penjualan telah berhasil");
    }
}

}