<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pengalaman',
        'perusahaan',
        'tahun_mulai',
        'tahun_selesai',
        'kerjaan',
        // Add other fields as needed
    ];
}