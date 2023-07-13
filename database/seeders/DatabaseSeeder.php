<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CafeTipoPerfilSeeder::class);
        $this->call(CafeConteudoSeeder::class);
        $this->call(CafeEtapasAberturaSeeder::class);
        $this->call(CafeEstadoSeeder ::class);

        DB::table('cafe_cidades')->insert([
            [
                'id_cid' => '444',
                'nome_cid' => 'Palmas',
                'ibge_cid' => '1721000',
                'fk_idEstado_end' => '27',
            ],
            [
                'id_cid' => '883',
                'nome_cid' => 'Teresina',
                'ibge_cid' => '2211001',
                'fk_idEstado_end' => '18',
            ],
            [
                'id_cid' => '3175',
                'nome_cid' => 'Vitória',
                'ibge_cid' => '3205309',
                'fk_idEstado_end' => '8',
            ],
        ]);
        
        $this->call(CafeFotoPerfilSeeder ::class);
        // $this->call(CafeCidadeSeeder ::class);
        $this->call(CafeUsuarioSeeder ::class);
        $this->call(CafeEnderecoSeeder ::class);
        $this->call(CafeContatoSeeder ::class);
        $this->call(UpdateCafeUsuarioSeeder ::class);
    }
}
