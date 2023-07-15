<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CafeConteudoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cafe_conteudos')->insert([
            [
                'titulo_con' => 'Curso Photoshop #01',
                'link_con' => 'https://www.youtube.com/embed/apyGxxabcZ4',
                'descricao_con' => 'Aula do Curso de Photoshop CC'
            ],
            [
                'titulo_con' => 'Curso Photoshop #02',
                'link_con' => 'https://www.youtube.com/embed/EQZArZ45jjM',
                'descricao_con' => 'Veja como recortar cabelos usando arestas'
            ],
            [
                'titulo_con' => 'Curso Photoshop #03',
                'link_con' => 'https://www.youtube.com/embed/3a8Ad1lJMXQ',
                'descricao_con' => 'Em que imagens podemos aplicar o Content Aware?'
            ]
        ]);
    }
}
