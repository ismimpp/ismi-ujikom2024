<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    public $timstamps = false;
    protected $table = "penjualan";

    protected $fillable = ['penjualanID', 'TanggalPenjualan', 'TotalHarga', 'PelangganID'];
}
