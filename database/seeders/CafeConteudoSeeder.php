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
                'titulo_con' => 'WLO - Guerra dos Heróis [ One Punch Man ] Prod WB & Dakvir',
                'link_con' => 'https://www.youtube.com/embed/I2Kh5TQd204',
                'descricao_con' => 'Tamo de volta!!!Essa é a estreia de um novo quadro do canal, onde a gente vai tá trazendo uam narração de forma músical das guerras mais incriveis dos animes!!Espero muito que vocês gostem, e já comenta ai mais ideais pra esse quadro novo'
            ],
            [
                'titulo_con' => 'Os DILEMAS dos TÍMIDOS que são EXTROVERTIDOS em BOCCHI THE ROCK | Psicologia Bocchi the Rock',
                'link_con' => 'https://www.youtube.com/embed/FDOLsk6raWw',
                'descricao_con' => 'No episodio de hoje, voltamos a falar de ANSIEDADE SOCIAL, mas dessa vez dentro do universo do anime de Bocchi the rock, e na mente de Hitori Gotoh!'
            ],
            [
                'titulo_con' => 'Lil Chainz x AniRap - Líder da Toman',
                'link_con' => 'https://www.youtube.com/embed/LmqjL7f8I5c',
                'descricao_con' => 'Opa seus lindos, tudo bom? "Líder da Toman" acabou de sair no Spotify, Deezer, Apple Music e todas outras plataformas!!!! (sei que tinha muita gente pedindo)'
            ]
        ]);
    }
}
