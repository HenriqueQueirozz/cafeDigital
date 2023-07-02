<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CafeTipoPerfilSeeder::class);
        $this->call(CafeConteudoSeeder::class);
        $this->call(CafeEtapasAberturaSeeder::class);
        $this->call(CafeEstadoSeeder ::class);
        $this->call(CafeCidadeSeeder ::class);
        // $this->call(CafeUsuarioSeeder ::class);
    }
}
