<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CafeUsuarioController extends Controller
{
    public function getUsuarioByEmail($email) {
        $usuarios = DB::table('cafe_usuarios')->where('email_usu', $email)->get();

        if(isset($usuarios[0])){
            return $usuarios;
        }else{
            return false;
        }
    }

    public function getUsuarioByCodigo($codigo) {
        $usuarios = DB::table('cafe_usuarios')->where('codigo_usu', $codigo)->get();
 
        if(isset($usuarios[0])){
            return $usuarios;
        }else{
            return false;
        }
    }

    public function tratamentoDeDados($dados){
        $dados_validados = [];
        foreach($dados as $chave_original => $valor){
            if($chave_original != '_token'){
                $chave = explode('-', $chave_original)[1];
    
                switch($chave){
                    case 'Cpf':
                    case 'Rg':
                        $valor = str_replace('.', '', $valor);
                        $valor = str_replace('-', '', $valor);
                        break;
    
                    case 'Cpe':
                        $valor = str_replace('-', '', $valor);
                        break;
    
                    case 'Data':
                        $valor = explode('/', $valor);
                        $valor = array_reverse($valor);
                        $valor = implode('-', $valor);
                        break;
    
                    default:
                        break;
                }
            }

            $dados_validados[$chave_original] = $valor;
        }

        return $dados_validados;
    }

    public function mapa_associados(){
        return view('app.associados');
    }


}
