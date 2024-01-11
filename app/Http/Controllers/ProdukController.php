<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;


class ProdukController extends Controller
{
    //function produk(){
    //    return view('Produk');
    //}
function Produk(){
    $judul = "Data Produk";

    $data = produk::all();

    return view('Produk', [
        'produk'-> $data,
        'judul'-> $judul,
    ]);
}

function update(){
     
}

function hapus($id)
{
     echo $id;
     $deleted = DB::table('produk')->where('ProdukID', $id)->delete();
     if ($deleted) {
        return redirect('/produk');
     }
}
}