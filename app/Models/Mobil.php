<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobils';

    protected $fillable = [
        'nomor_polisi',
        'merek_mobil',
        'kapasitas',
        'status',
        'harga_sewa',
        'foto_mobil',
    ];
}
