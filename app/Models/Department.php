<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'id_departemen',
        'nama_departemen',
        'lokasi_departemen'
    ];
}
