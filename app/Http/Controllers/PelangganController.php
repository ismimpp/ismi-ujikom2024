<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    function pelanggan(){
        $judul = "data_pelanggan";
        $pelanggan = DB::table('pelanggan')->get();

        return view ('data_pelanggan', ['judul' => $judul, 'pelanggan' => $pelanggan]);
    }

    function update(){

    }

    function hapus($id)
    {
        echo $id;
        $deleted = DB::table('pelanggan')->where('PelangganID', $id)->delete();
        if ($deleted){
            return redirect('/pelanggan');
        }
    }
}