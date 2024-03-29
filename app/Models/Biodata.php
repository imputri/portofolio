<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'no_hp',
        'email',
        'umur',
        'kota',
        'gelar',
        'x',
        'fb',
        'ig',
        'skype',
        'linkedin',
        'foto',
    ];
}