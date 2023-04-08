<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewa extends Model
{
    // use HasFactory;
    protected $table = "penyewa";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama penyewa',
        'id_penyewa',
        'nama_barang',
        'telepon',
        'harga',
        'tanggal_peminjaman'
    ];
}
