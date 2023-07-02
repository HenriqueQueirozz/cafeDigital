<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CafeContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cafe_contatos')->insert([
            [
                'contato_con' => '(11) 2938-6065',
                'tipo_con' => 'Celular',
                'fk_idUsuario_con' => '1',
            ],
            [
                'contato_con' => '(11) 98327-4270',
                'tipo_con' => 'Telefone',
                'fk_idUsuario_con' => '1',
            ],
            [
                'contato_con' => '(11) 2948-2627',
                'tipo_con' => 'Celular',
                'fk_idUsuario_con' => '2',
            ],
            [
                'contato_con' => '(11) 99203-8272',
                'tipo_con' => 'Telefone',
                'fk_idUsuario_con' => '2',
            ],
            [
                'contato_con' => '(11) 2672-1353',
                'tipo_con' => 'Celular',
                'fk_idUsuario_con' => '3',
            ],
            [
                'contato_con' => '(11) 98541-0993',
                'tipo_con' => 'Telefone',
                'fk_idUsuario_con' => '3',
            ]
        ]);
    }
}
