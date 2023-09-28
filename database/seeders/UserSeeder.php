<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->nama = 'Fanisa Riski';
        $user->email = 'Fanisa@gmail.com';
        $user->password = '1234';
        $user->no_telepon = '085692683015';
        $user->alamat = 'Bekasi';
        $user->jenis_kelamin = 'Perempuan';
        $user->pekerjaan = 'Dokter';
        $user->save();
    }
}
