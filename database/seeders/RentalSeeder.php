<?php

namespace Database\Seeders;

use App\Models\Rental;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rental = new Rental();
        $rental->id_user              = 1;
        $rental->id_mobil             = 1;
        $rental->foto_ktp             = 'ktp.png';
        $rental->tanggal_sewa         = '2023-09-20';
        $rental->tanggal_kembali      = '2023-09-30';
        $rental->total_harga_sewa     = 500000;
        $rental->metode_pembayaran    = 'cash';
        $rental->save();
    }
}
