<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Daftar atribut yang dapat diisi
    protected $fillable = [
        'judul_project', // Updated from 'title' to 'nama_project'
        'keterangan',    // Updated from 'description' to 'deskripsi'
        'image',
        // Tambahkan atribut lainnya jika diperlukan
    ];

    // Relasi dengan model Category
}