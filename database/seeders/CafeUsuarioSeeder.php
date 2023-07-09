<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CafeUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cafe_usuarios')->insert([
            [
                'nome_usu' => 'Admin',
                'dataNascimento_usu' => '1975-02-07',
                'email_usu' => 'admin@gmail.com',
                'codigo_usu' => '100001',
                'sexo_usu' => 'M',
                'password' => Hash::make('admin@123'),
                'cpf_usu' => '57419171009',
                'rg_usu' => '312094267',
                'fk_idTipoPerfil_usu' => '1',
                'fk_idAberturaEtapa_usu' => '6',
                'fk_idFotoPerfil_usu' => '1',
                'created_at' => '2023-07-09 13:12:17',
            ],
            [
                'nome_usu' => 'Dono',
                'dataNascimento_usu' => '1944-04-14',
                'email_usu' => 'dono@gmail.com',
                'codigo_usu' => '100002',
                'sexo_usu' => 'F',
                'password' => Hash::make('dono@123'),
                'cpf_usu' => '17563844953',
                'rg_usu' => '471426210',
                'fk_idTipoPerfil_usu' => '2',
                'fk_idAberturaEtapa_usu' => '6',
                'fk_idFotoPerfil_usu' => '2',
                'created_at' => '2023-07-09 13:12:17',
            ],
            [
                'nome_usu' => 'Frater',
                'dataNascimento_usu' => '1978-04-15',
                'email_usu' => 'frater@gmail.com',
                'codigo_usu' => '100003',
                'sexo_usu' => 'M',
                'password' => Hash::make('frater@123'),
                'cpf_usu' => '72752353154',
                'rg_usu' => '368414498',
                'fk_idTipoPerfil_usu' => '3',
                'fk_idAberturaEtapa_usu' => '6',
                'fk_idFotoPerfil_usu' => '3',
                'created_at' => '2023-07-09 13:12:17',
            ]
        ]);
    }
}
