<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
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

    public function getUsuarioByIndicacao($codigo) {
        $usuarios = DB::table('cafe_usuarios')->where('fk_idUsuarioIndicacao', $codigo)->get();
 
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

    public function getUsuarioDados($usuario){
        $dados_usuario['id']                    = $usuario->id;
        $dados_usuario['nome_usu']              = $usuario->nome_usu;
        $dados_usuario['dataNascimento_usu']    = $usuario->dataNascimento_usu;
        $dados_usuario['email_usu']             = $usuario->email_usu;
        $dados_usuario['sexo_usu']              = $usuario->sexo_usu;
        $dados_usuario['codigo_usu']            = $usuario->codigo_usu;
        $dados_usuario['fk_idUsuarioIndicacao'] = $usuario->fk_idUsuarioIndicacao;

        return $dados_usuario;
    }

    public function mapa_associados(){
        $UsuarioAtual = $this->getUsuarioDados(Auth::user());
        $UsuarioIndicador = $this->getUsuarioDados(User::find($UsuarioAtual['fk_idUsuarioIndicacao']));
        $UsuariosIndicados = $this->getUsuarioByIndicacao($UsuarioAtual['id']);

        $arrayIndicados = [];
        foreach ($UsuariosIndicados as $usuario){
            array_push($arrayIndicados, $this->getUsuarioDados($usuario));
        }

        // print_r('<pre>');
        // print_r($UsuarioAtual);
        // print_r('<hr>');
        // print_r($UsuarioIndicador);
        // print_r('<hr>');
        // print_r($arrayIndicados);
        // exit;
        
        return view('app.associados', []);
    }


}
