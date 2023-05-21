<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function cadastro_associado(){
        return view('app/cadastro-associado');
    }

    //
    public function mapa_associados(){
        return view('app/mapa-associados');
    }
}
