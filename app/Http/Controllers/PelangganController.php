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

    function tambah_pelanggan(){
        $isi = "tambah_pelanggan";
        return view('tambah_pelanggan', ['isi' => $isi]);
     }
 
     function proses_tambahpelanggan(Request $request){
         $tambahpelanggan = $request->NamaPelanggan;
         $tambahalamat = $request->Alamat;
         $tambahnomortelepon = $request->NomorTelepon;
 
         DB::table('pelanggan')->insert([
             'NamaPelanggan' => $tambahpelanggan,
             'Alamat' => $tambahalamat,
             'NomorTelepon' => $tambahnomortelepon,
         ]);
         return redirect("/data_pelanggan");
     }

    function update($id){
        $produk = DB::table('pelanggan')->where('PelangganID', $id)->first();
        return view ('update_pelanggan', ['pelanggan'=> $pelanggan]);
    }

    function proses_updatepelanggan(Request $request, $id){
        $NamaPelanggan = $request->NamaPelanggan;
        $Alamat = $request->Alamat;
        $NomorTelepon = $request->NomorTelepon;

        DB::table('pelanggan')->where('Pelanggan', $id)->update([
            'NamaPelanggan' => $NamaPelanggan,
            'Alamat' => $Alamat,
            'NomorTelepon' => $NomorTelepon,
        ]);
        return redirect("/data_pelanggan");
    }

    function hapus($id)
    {
        echo $id;
        $delete= DB::table('pelanggan')->where('PelangganID', $id)->delete();
        //if ($deleted){
            return redirect()->back();
        }
    
}