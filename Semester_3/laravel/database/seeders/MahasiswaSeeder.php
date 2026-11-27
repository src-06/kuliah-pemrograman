<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nim' => '26010001',
                'nama' => 'Septian',
                'prodi' => 'D4 Teknik Pertanian',
                'email' => 'petani@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '26010002',
                'nama' => 'Leonardo',
                'prodi' => 'S1 Seniman',
                'email' => 'seniman@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '26010003',
                'nama' => 'Jeane',
                'prodi' => 'S2 Fasion',
                'email' => 'fasion@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '26010004',
                'nama' => 'Cahyo',
                'prodi' => 'D3 Asparagus',
                'email' => 'asparagus@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '26010005',
                'nama' => 'George',
                'prodi' => 'S1 Kehutanan',
                'email' => 'kehutanan@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '26010006',
                'nama' => 'Demitri',
                'prodi' => 'S2 Bisnis',
                'email' => 'bisnis@gmail.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
