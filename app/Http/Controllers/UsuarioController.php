<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CafeUsuario;

class UsuarioController extends Controller
{
    public function cadastro_associado(){
        return view('app/cadastro-associado');
    }

    public function mapa_associados(){
        return view('app/mapa-associados');
    }

    public function login(){
        return view('app/mapa-associados');
    }

    public function cadastrarUsuario(Request $request){
        $etapa = 1;

        switch ($etapa){
            case 1:
                $Usuario = new CafeUsuario;
        
                $Usuario->nome_usu                  = $request['input-Nome'];
                $Usuario->dataNascimento_usu        = $request['input-Data'];
                $Usuario->sexo_usu                  = $request['input-Sexo'];
                $Usuario->cpf_usu                   = $request['input-Cpf'];
                $Usuario->email_usu                 = $request['input-Email'];
                $Usuario->fk_idAberturaEtapa_usu    = 2;
        
                $Usuario->save();
        
                return redirect('/cadastro', ['etapa' => $Usuario->fk_idAberturaEtapa_usu]);
                break;
            
            case 2:
                break;
        }
    }
}
