<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;

class ProdukController extends Controller
{
    function produk(){
        $judul = "data_produk";
        $produk = DB::table('produk')->get();

        return view ('data_produk', ['judul' => $judul, 'produk' => $produk]);
    }

    function update(){

    }

    function hapus($id)
    {
        echo $id;
        $deleted = DB::table('produk')->where('ProdukID', $id)->delete();
        if ($deleted){
            return redirect('/produk');
        }
    }
}