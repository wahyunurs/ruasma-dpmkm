<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aspirasi;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'mid';

    protected $fillable = [
        'mid',
        'nim',
        'fakultas',
        'nama',
    ];

    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class);
    }
}
