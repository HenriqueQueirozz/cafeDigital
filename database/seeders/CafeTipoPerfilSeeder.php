<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CafeTipoPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cafe_tipo_perfis')->insert([
            [
                'nome_tp' => 'Administrador',
                'descricao_tp' => 'Administrador do sistema'
            ],
            [
                'nome_tp' => 'Dono do clube',
                'descricao_tp' => 'Usuário que gerencia um clube'
            ],
            [
                'nome_tp' => 'Associado',
                'descricao_tp' => 'Usuário comum'
             ]
        ]);
    }
}
