<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CafeEnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cafe_enderecos')->insert([
            [
                'rua_end' => 'Rua dos Tucanos',
                'bairro_end' => 'Jardim Aeroporto (Taquaralto)',
                'numero_end' => '447',
                'cep_end' => '77062238',
                'complemento_end' => '',
                'fk_idCidade_end' => '444'
            ],
            [
                'rua_end' => 'Rua Trinta e Seis',
                'bairro_end' => 'Angelim',
                'numero_end' => '229',
                'cep_end' => '64041680',
                'complemento_end' => '(Cerâmica Cil)',
                'fk_idCidade_end' => '883'
            ],
            [
                'rua_end' => 'Rua Professor José Nunes',
                'bairro_end' => 'de Lourdes',
                'numero_end' => '468',
                'cep_end' => '29042810',
                'complemento_end' => '',
                'fk_idCidade_end' => '3175'
            ],
        ]);
    }
}
