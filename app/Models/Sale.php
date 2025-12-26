<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'id_penjualan',
        'id_produk',
        'nama_produk',
        'harga_satuan',
        'jumlah',
        'total',
    ];
}
