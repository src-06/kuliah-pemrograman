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
                'prodi' => 'D4 Teknik Pertanian'
            ],
            [
                'nim' => '26010002',
                'nama' => 'Leonardo',
                'prodi' => 'S1 Seniman'
            ],
            [
                'nim' => '26010003',
                'nama' => 'Jeane',
                'prodi' => 'S2 Fasion'
            ],
        ]);
    }
}
