<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\CafeEndereco;
use App\Models\CafeCidade;
use App\Models\CafeEstado;
use App\Models\CafeContato;
use App\Models\CafeTipoPerfil;
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
        if($UsuarioAtual['fk_idUsuarioIndicacao']){
            $UsuarioIndicador = $this->getUsuarioDados(User::find($UsuarioAtual['fk_idUsuarioIndicacao']));
        }
        else{
            $UsuarioIndicador = '';
        }
        $UsuariosIndicados = $this->getUsuarioByIndicacao($UsuarioAtual['id']);

        $arrayIndicados = [];
        foreach ($UsuariosIndicados as $usuario){
            array_push($arrayIndicados, $this->getUsuarioDados($usuario));
        }

        return view('app.mapa-associados', ['UsuarioAtual' => $UsuarioAtual, 'UsuarioIndicador' => $UsuarioIndicador, 'UsuariosIndicados' => $arrayIndicados]);
    }

    public function meu_perfil(){
        
        $UsuarioConta = CafeTipoPerfil::find(Auth::user()->fk_idTipoPerfil_usu);
        $UsuarioEndereco = CafeEndereco::find(Auth::user()->fk_idEndereco_usu);
        $UsuarioCidade   = CafeCidade::find($UsuarioEndereco->fk_idCidade_end);
        $UsuarioEstado   = CafeEstado::find($UsuarioCidade->fk_idEstado_end);
        $Contato_telefone  = DB::table('cafe_contatos')->where('fk_idUsuario_con', Auth::user()->id)->where('tipo_con', 'Telefone')->get()[0];
        $Contato_celular   = DB::table('cafe_contatos')->where('fk_idUsuario_con', Auth::user()->id)->where('tipo_con', 'Celular')->get()[0];

        $Dados_gerais = [];

        $Dados_gerais['id'] = Auth::user()->codigo_usu;
        $Dados_gerais['nome'] = Auth::user()->nome_usu;
        $Dados_gerais['cpf'] = Auth::user()->cpf_usu;
        $Dados_gerais['email'] = Auth::user()->email_usu;
        $Dados_gerais['sexo'] = Auth::user()->sexo_usu;
        $Dados_gerais['rg'] = Auth::user()->rg_usu;
        $Dados_gerais['data_nascimento'] = Auth::user()->dataNascimento_usu;
        $Dados_gerais['conta'] = $UsuarioConta->nome_tp;

        $Dados_gerais['cidade'] = $UsuarioCidade->nome_cid;
        $Dados_gerais['estado'] = $UsuarioEstado->nome_est;
        $Dados_gerais['cep'] = $UsuarioEndereco->cep_end;
        $Dados_gerais['rua'] = $UsuarioEndereco->rua_end;
        $Dados_gerais['bairro'] = $UsuarioEndereco->bairro_end;
        $Dados_gerais['numero'] = $UsuarioEndereco->numero_end;
        $Dados_gerais['complemento'] = $UsuarioEndereco->complemento_end;

        $Dados_gerais['celular'] = $Contato_celular->contato_con;
        $Dados_gerais['telefone'] = $Contato_telefone->contato_con;

        // print_r('<pre>');
        // print_r($Dados_gerais);
        // exit;

        return view('app.home', ['Dados_gerais' => $Dados_gerais]);
    }

}
