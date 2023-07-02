<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CafeEstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cafe_estados')->insert([
            [
                'nome_est' => 'Acre',
                'uf_est'   => 'AC'
            ],
            [
                'nome_est' => 'Alagoas',
                'uf_est'   => 'AL'
            ],
            [
                'nome_est' => 'Amapá',
                'uf_est'   => 'AP'
            ],
            [
                'nome_est' => 'Amazonas',
                'uf_est'   => 'AM'
            ],
            [
                'nome_est' => 'Bahia',
                'uf_est'   => 'BA'
            ],
            [
                'nome_est' => 'Ceará',
                'uf_est'   => 'CE'
            ],
            [
                'nome_est' => 'Distrito Federal',
                'uf_est'   => 'DF'
            ],
            [
                'nome_est' => 'Espírito Santo',
                'uf_est'   => 'ES'
            ],
            [
                'nome_est' => 'Goiás',
                'uf_est'   => 'GO'
            ],
            [
                'nome_est' => 'Maranhão',
                'uf_est'   => 'MA'
            ],
            [
                'nome_est' => 'Mato Grosso',
                'uf_est'   => 'MT'
            ],

            [
                'nome_est' => 'Mato Grosso do Sul',
                'uf_est'   => 'MS'
            ],
            [
                'nome_est' => 'Minas Gerais',
                'uf_est'   => 'MG'
            ],
            [
                'nome_est' => 'Pará',
                'uf_est'   => 'PA'
            ],
            [
                'nome_est' => 'Paraíba',
                'uf_est'   => 'PB'
            ],
            [
                'nome_est' => 'Paraná',
                'uf_est'   => 'PR'
            ],
            [
                'nome_est' => 'Pernambuco',
                'uf_est'   => 'PE'
            ],
            [
                'nome_est' => 'Piauí',
                'uf_est'   => 'PI'
            ],
            [
                'nome_est' => 'Rio de Janeiro',
                'uf_est'   => 'RJ'
            ],
            [
                'nome_est' => 'Rio Grande do Norte',
                'uf_est'   => 'RN'
            ],
            [
                'nome_est' => 'Rio Grande do Sul',
                'uf_est'   => 'RS'
            ],
            [
                'nome_est' => 'Rondônia',
                'uf_est'   => 'RO'
            ],
            [
                'nome_est' => 'Roraima',
                'uf_est'   => 'RR'
            ],
            [
                'nome_est' => 'Santa Catarina',
                'uf_est'   => 'SC'
            ],
            [
                'nome_est' => 'São Paulo',
                'uf_est'   => 'SP'
            ],
            [
                'nome_est' => 'Sergipe',
                'uf_est'   => 'SE'
            ],
            [
                'nome_est' => 'Tocantins',
                'uf_est'   => 'TO'
            ],
        ]);
    }
}
