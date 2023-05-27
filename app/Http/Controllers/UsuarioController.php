<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CafeUsuario;

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

    public function store(Request $request){

        $associado = new CafeUsuario;
        $associado->nome_usu            = $request['input-nome-associado'];
        $associado->dataNascimento_usu  = $request['input-data-associado'];
        $associado->sexo_usu            = $request['input-sexo-associado'];
        $associado->cpf_usu             = $request['input-cpf-associado'];
        $associado->rg_usu              = $request['input-rg-associado'];
        $associado->fk_idTipoPerfil_usu = 3;

        $associado->save();

        return redirect('app/conteudos');
    }
}
