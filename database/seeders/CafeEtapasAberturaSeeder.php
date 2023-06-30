<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CafeEtapasAberturaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cafe_abertura_etapas')->insert([
            ['nome_eta' => 'Dados da conta'],
            ['nome_eta' => 'Dados do usuário'],
            ['nome_eta' => 'Endereço'],
            ['nome_eta' => 'Escolha de planos'],
            ['nome_eta' => 'Pagamento'],
            ['nome_eta' => 'Finalização']
        ]);
    }
}
