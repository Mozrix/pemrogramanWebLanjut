<?php

namespace Database\Seeders;

use App\Models\JurusanModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Teknik Informatika',
            'Sistem Informasi',
            'Teknik Komputer',
            'Ilmu Komputer',
            'Manajemen Informatika',
        ];

        foreach ($data as $jurusan) {
            JurusanModel::create(['nama_jurusan' => $jurusan]);
        }
    }
}
