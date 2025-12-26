<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'id_kursus',
        'nama_kursus',
        'instruktur'
    ];
}
