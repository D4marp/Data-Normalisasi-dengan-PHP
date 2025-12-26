<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'id_mahasiswa',
        'id_kursus',
        'nama_kursus',
        'instruktur',
        'tanggal_pemesanan'
    ];
}
