<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conteudo;
use Illuminate\Support\Facades\DB;

class GerenciamentoConteudosController extends Controller
{
    public function store(Request $request)
    {
        $link = $request->input('link');
        $titulo = $request->input('titulo');
        $descricao = $request->input('descricao');

        // Inserindo dados na tabela cafe_conteudos
        DB::table('cafe_conteudos')->insert([
            'link_con' => $link,
            'titulo_con' => $titulo,
            'descricao_con' => $descricao,
        ]);

        session()->flash('success', 'Conteúdo adicionado com sucesso!');
    
        return redirect()->back()->with('success', 'Conteúdo adicionado com sucesso!');
    }
}