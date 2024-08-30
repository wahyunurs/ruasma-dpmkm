<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_aspirasi',
        'aspirasi_usc',
        'aspirasi_umum',
        'gambar_kerusakan_usc',
        'gambar_kerusakan_umum',
        'mid',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mid');
    }
}
