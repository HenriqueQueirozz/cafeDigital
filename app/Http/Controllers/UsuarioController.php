<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CafeUsuario;
use App\Models\CafeEndereco;
use App\Models\CafeContato;

class UsuarioController extends Controller
{
    public function cadastro_associado(){
        return view('app/cadastro-associado');
    }

    public function mapa_associados(){
        return view('app/mapa-associados');
    }

    public function login(){
        // login
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
                $Usuario = new CafeUsuario;
                $Endereco = new CafeEndereco();
        
                $Usuario->rg_usu                    = $request['input-Rg'];
                $Endereco->cep_end                  = $request['input-Cpe'];
                $Endereco->bairro_end               = $request['input-Bairro'];
                $Endereco->rua_end                  = $request['input-Log'];
                $Endereco->numero_end               = $request['input-Num'];
                $Endereco->complemento_end          = $request['input-Comp'];
                $Usuario->fk_idAberturaEtapa_usu    = 3;
        
                $Usuario->save();
                $Endereco->save();
        
                return redirect('/cadastro', ['etapa' => $Usuario->fk_idAberturaEtapa_usu]);
                break;
            case 3:
                $Usuario = new CafeUsuario;
                $Contato = new CafeContato;
                
                $request['input-ConfirmeSenha'];
        
                $Contato->contato_con               = $request['input-Tel'];
                $Contato->contato_con               = $request['input-Cel'];
                $Usuario->senha_usu                 = $request['input-Senha'];
                $Usuario->fk_idAberturaEtapa_usu    = 4;
        
                $Usuario->save();
                $Contato->save();
                
                return redirect('/cadastro', ['etapa' => $Usuario->fk_idAberturaEtapa_usu]);
                break;
            case 4:
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
        }
    }
}
