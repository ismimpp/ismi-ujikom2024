<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\facades\Auth;
use App\Models\Produk;

class ProdukController extends Controller
{
    function produk(){
        $judul = "data_produk";
        $produk = DB::table('produk')->get();

        return view ('data_produk', ['judul' => $judul, 'produk' => $produk]);
    }

    function update($id){
        $produk = DB::table('produk')->where('ProdukID', $id)->first();
        return view ('update_produk', ['produk'=> $produk]);
    }

    function produk2(){
        if(Auth::user()->status === "petugas"){
            return abort(403);
        }
       $isi = "tambah_produk";
       return view('tambah_produk', ['isi' => $isi]);
    }

    function proses_tambahproduk(Request $request){
        $tambahproduk = $request->NamaProduk;
        $tambahharga = $request->Harga;
        $tambahstock = $request->Stock;

        DB::table('produk')->insert([
            'NamaProduk' => $tambahproduk,
            'Harga' => $tambahharga,
            'Stock' => $tambahstock,
        ]);
        return redirect("/data_produk");
    }

    function proses_updateproduk(Request $request, $id){
        $NamaProduk = $request->NamaProduk;
        $Harga = $request->Harga;
        $Stock = $request->Stock;

        DB::table('produk')->where('ProdukID', $id)->update([
            'NamaProduk' => $NamaProduk,
            'Harga' =>$Harga,
            'Stock' =>$Stock,
        ]);
        return redirect("/data_produk");
    }

    function hapus($id)
    {
        echo $id;
        $delete= DB::table('produk')->where('ProdukID', $id)->delete();
        //if ($deleted){
            return redirect()->back();
        }
    
}