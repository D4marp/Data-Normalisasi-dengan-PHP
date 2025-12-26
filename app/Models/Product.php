<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id_produk',
        'nama_produk',
        'kategori',
        'harga',
    ];
}
