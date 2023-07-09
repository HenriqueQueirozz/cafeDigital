<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CafeFotoPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cafe_foto_perfis')->insert([
            [
                'nomeFoto_fp' => 'capivara.jpg'
            ],
            [
                'nomeFoto_fp' => 'PerfilAuto.png'
            ],
            [
                'nomeFoto_fp' => 'PerfilAuto.png'
            ],
        ]);
    }
}
