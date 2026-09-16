<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nama' => 'Noval',
                'npm' => '2457052003',
                'kelas' => 'A',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama' => 'Rafief',
                'npm' => '2477052003',
                'kelas' => 'B',
                'jurusan' => 'Sistem Informasi',
            ],
        ]);
    }
}
