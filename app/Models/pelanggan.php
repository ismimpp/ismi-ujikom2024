<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    public $timstamps = false;
    protected $table = "pelanggan";

    protected $fillable = ['pelangganID', 'NamaPelanggan', 'Alamat', 'NomorTelepon'];
}
