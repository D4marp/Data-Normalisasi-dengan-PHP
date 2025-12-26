<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id_mahasiswa',
        'nama_mahasiswa'
    ];
}
