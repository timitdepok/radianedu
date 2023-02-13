<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        "foto",
        "cv",
        "tanggal_lahir",
        "asal_ptn",
        "jurusan",
        "ipk",
        "provinsi",
        "kabupaten",
        "kecamatan",
        "alamat",
        "aktvitas"    
    ];
}
