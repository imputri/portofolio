<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenjang_pendidikan',
        'nama_pendidikan',
        'tahun_masuk',
        'tahun_lulus',
        'keterangan',
    ];
}
