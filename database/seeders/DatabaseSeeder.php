<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\rakbuku;
use App\Models\kategoribuku;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminperpus = [
            [
                'username' => 'Admins',
                'password' => Hash::make ('123456789'),
                'email' => 'admin@gmail.com',
                'namalengkap' => 'Admin Perpustakaan',
                'alamat' => 'JL. VETERAN KOTA PASURUAN',
                'role' => 'Admin',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($adminperpus);

        $petugasperpus = [
            [
                'username' => 'Petugass',
                'password' => Hash::make ('123456789'),
                'email' => 'petugas@gmail.com',
                'namalengkap' => 'Petugas Perpustakaan',
                'alamat' => 'JL. VETERAN KOTA PASURUAN',
                'role' => 'Petugas',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($petugasperpus);

        $siswaperpus = [
            [
                'username' => 'Siswas',
                'password' => Hash::make ('123456789'),
                'email' => 'siswa@gmail.com',
                'namalengkap' => 'Siswa Perpustakaan',
                'alamat' => 'JL. VETERAN KOTA PASURUAN',
                'role' => 'Siswa',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($siswaperpus);

        $kategoribuku = [
            [
                'namakategori' => 'Romance',
            ],
        ];
        kategoribuku::insert($kategoribuku);

        $rakbuku = [
            [
                'namarak' => 'R24',
            ],
        ];
        rakbuku::insert($rakbuku);
    }
}
