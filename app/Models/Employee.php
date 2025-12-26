<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'id_karyawan',
        'nama_karyawan',
        'id_departemen',
        'nama_departemen',
        'lokasi_departemen',
        'gaji'
    ];
}
