<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mobil;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mobil = new Mobil();
        $mobil->nomor_polisi = 'P1334XA';
        $mobil->merek_mobil = 'Toyota';
        $mobil->kapasitas = '4';
        $mobil->status = 'Tersedia';
        $mobil->harga_sewa = '300000';
        $mobil->foto_mobil = 'mobil.jpg';
        $mobil->save();
    }
}
