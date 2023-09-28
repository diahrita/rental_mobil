<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $table = 'rentals';

    protected $fillable = [
        'id_user',
        'id_mobil',
        'foto_ktp',
        'tanggal_sewa',
        'tanggal_kembali',
        'total_harga_sewa',
        'total_harga_sewa',
        'metode_pembayaran',
    ];
}
