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
        $data = [
            [
                'nama' => 'M Noval',
                'npm' => '2457052003',
                'kelas' => '2',
                'jurusan' => 'Ilmu Komputer',
            ],
            [
                'nama' => 'Rafief',
                'npm' => '2477052003',
                'kelas' => '1',
                'jurusan' => 'Sistem Informasi',
            ],
        ];

        DB::table('user')->insert($data);
    }
}
