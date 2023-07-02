<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CafeConteudo;

class ConteudoController extends Controller
{
    //
    public function index(){
        
        $conteudos = CafeConteudo::all();
        return view('app.conteudos', ['conteudos' => $conteudos]);
    }
}
