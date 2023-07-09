<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

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
            return get_object_vars($usuarios[0]);
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

    public function tratamentoSQL($dados){
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

    public function tratamentoTela($dados){
        $dados_validados = [];
        foreach($dados as $chave_original => $valor){
            if($chave_original != 'celular' && $chave_original != 'telefone'){
                $chave = explode('_', $chave_original);
                if(count($chave) == 1 || count($chave) == 2){
                    $chave = $chave[0];
                }else if(count($chave) == 3){
                    $chave = $chave[1];
                }

                switch($chave){
                    case 'sexo':
                        if($valor == 'M'){
                            $valor = 'Masculino';
                        }else if($valor == 'F'){
                            $valor = 'Feminino';
                        }else if($valor == 'O'){
                            $valor = 'Outros';
                        }

                    case 'dataNascimento':
                        $valor = explode('-', $valor);
                        $valor = array_reverse($valor);
                        $valor = implode('/', $valor);
                        break;

                    case 'created':
                        $valor = explode(' ', $valor)[0];
                        $valor = explode('-', $valor);
                        $valor = array_reverse($valor);
                        $valor = implode('/', $valor);
                        break;

                    default:
                        break;
                }
            }

            $dados_validados[$chave_original] = $valor;
        }

        return $dados_validados;
    }

    public function getUsuarioDados($usuario_id){
        $dados_usuario      = DB::table('cafe_usuarios')
                                        ->join('cafe_tipo_perfis', 'cafe_usuarios.fk_idTipoPerfil_usu', '=', 'cafe_tipo_perfis.id_tp')
                                        ->join('cafe_foto_perfis', 'cafe_usuarios.fk_idFotoPerfil_usu', '=', 'cafe_foto_perfis.id_fp')
                                        ->join('cafe_enderecos', 'cafe_usuarios.fk_idEndereco_usu', '=', 'cafe_enderecos.id_end')
                                        ->join('cafe_cidades', 'cafe_enderecos.fk_idCidade_end', '=', 'cafe_cidades.id_cid')
                                        ->join('cafe_estados', 'cafe_cidades.fk_idEstado_end', '=', 'cafe_estados.id_est')
                                        ->where('id', $usuario_id)
                                        ->select(
                                                'cafe_usuarios.id', 
                                                'cafe_usuarios.nome_usu', 
                                                'cafe_usuarios.dataNascimento_usu', 
                                                'cafe_usuarios.email_usu', 
                                                'cafe_usuarios.codigo_usu', 
                                                'cafe_usuarios.sexo_usu', 
                                                'cafe_usuarios.cpf_usu', 
                                                'cafe_usuarios.rg_usu', 
                                                'cafe_usuarios.fk_idTipoPerfil_usu', 
                                                'cafe_usuarios.fk_idAberturaEtapa_usu', 
                                                'cafe_usuarios.fk_idFotoPerfil_usu', 
                                                'cafe_usuarios.fk_idEndereco_usu', 
                                                'cafe_usuarios.fk_idUsuarioIndicacao', 
                                                'cafe_usuarios.created_at', 

                                                'cafe_tipo_perfis.id_tp', 
                                                'cafe_tipo_perfis.nome_tp', 
                                                'cafe_tipo_perfis.descricao_tp', 

                                                'cafe_enderecos.id_end', 
                                                'cafe_enderecos.rua_end', 
                                                'cafe_enderecos.bairro_end',
                                                'cafe_enderecos.numero_end', 
                                                'cafe_enderecos.cep_end',
                                                'cafe_enderecos.complemento_end',
                                                'cafe_enderecos.fk_idCidade_end',

                                                'cafe_cidades.id_cid',
                                                'cafe_cidades.nome_cid',
                                                'cafe_cidades.ibge_cid',
                                                'cafe_cidades.fk_idEstado_end',

                                                'cafe_estados.id_est',
                                                'cafe_estados.nome_est',
                                                'cafe_estados.uf_est',

                                                'cafe_foto_perfis.nomeFoto_fp',
                                                )
                                        ->get();
                                                                
        $telefone_usuario  = DB::table('cafe_contatos')->where('fk_idUsuario_con', $usuario_id)->where('tipo_con', 'Telefone')->get();
        $celular_usuario   = DB::table('cafe_contatos')->where('fk_idUsuario_con', $usuario_id)->where('tipo_con', 'Celular')->get();

        $dados_usuario      = get_object_vars($dados_usuario[0]); 
        $telefone_usuario   = get_object_vars($telefone_usuario[0]);
        $celular_usuario    = get_object_vars($celular_usuario[0]);

        $dados_usuario['celular'] = $celular_usuario;
        $dados_usuario['telefone'] = $telefone_usuario;
        
        return $dados_usuario;
    }

    public function mapa_associados(){
        //Usuário Atual
        $dados_usuario = $this->getUsuarioDados(Auth::user()->id);
        $dados_usuario = $this->tratamentoTela($dados_usuario);
        $dados_indicador = '';

        switch($dados_usuario['fk_idTipoPerfil_usu']){
            case '1':
                $todos_usuarios = User::all();

                $array_indicados = [];
                foreach ($todos_usuarios as $usuario){
                    $usuario = $this->getUsuarioDados($usuario->id);
                    $usuario = $this->tratamentoTela($usuario);
                    array_push($array_indicados, $usuario);
                }
                break;
                
            case '2':
            case '3':
                //Usuário Indicador
                if($dados_usuario['fk_idUsuarioIndicacao']){
                    $dados_indicador = $this->getUsuarioDados($dados_usuario['fk_idUsuarioIndicacao']);
                    $dados_indicador = $this->tratamentoTela($dados_indicador);
                }

                //Usuários Indicados
                $usuarios_indicados = $this->getUsuarioByIndicacao($dados_usuario['id']);
                $array_indicados = [];
                foreach ($usuarios_indicados as $usuario){
                    $usuario = $this->getUsuarioDados($usuario);
                    $usuario = $this->tratamentoTela($usuario);
                    array_push($array_indicados, $usuario);
                }

                break;
        }

        return view('app.mapa-associados', ['dados_usuario' => $dados_usuario, 'UsuarioIndicador' => $dados_indicador ? $dados_indicador : '', 'UsuariosIndicados' => $array_indicados]);
    }

    public function meu_perfil(Request $request){
        $dados_usuario = $this->getUsuarioDados(Auth::user()->id);
        $dados_usuario = $this->tratamentoTela($dados_usuario);

        return view('app.home', ['dados_usuario' => $dados_usuario, 'editar' => isset($request['editar']) ? true : false]);
    }

    public function store(Request $request){
        $dados_usuario = $this->getUsuarioDados(Auth::user()->id);
        $dados = $this->tratamentoSQL($request->all());

        $CafeEnderecoController = new CafeEnderecoController;
        // if(!$dados['erro']){
        if(true){

            $emailExistente = $this->getUsuarioByEmail($dados['input-Email']);
            if(($emailExistente && $emailExistente['id'] == $dados_usuario['id']) || !$emailExistente){
                
                $informacoesCidade = explode('-', $dados['input-Cidade']);
                $cidade = $informacoesCidade[0];
                $uf = $informacoesCidade[1];

                $dados_cidade = $CafeEnderecoController->getCidade($cidade, $uf);

                DB::table('cafe_usuarios')
                            ->where('id', $dados_usuario['id'])
                            ->update([
                                        'nome_usu' => $dados['input-Nome'],
                                        'dataNascimento_usu' => $dados['input-Data'],
                                        'email_usu' => $dados['input-Email'],
                                        'sexo_usu' => $dados['input-Sexo'],
                                        'cpf_usu' => $dados['input-Cpf'],
                                        'rg_usu' => $dados['input-Rg']
                                    ]);
        
                DB::table('cafe_enderecos')
                            ->where('id_end', $dados_usuario['id_end'])
                            ->update([  
                                        'rua_end' => $dados['input-Log'],
                                        'bairro_end' => $dados['input-Bairro'],
                                        'numero_end' => $dados['input-Num'],
                                        'cep_end' => $dados['input-Cpe'],
                                        'complemento_end' => $dados['input-Comp'],
                                        'fk_idCidade_end' => $dados_cidade['id_cid']
                                    ]);
        
                DB::table('cafe_contatos')
                            ->where('id_con', $dados_usuario['telefone']['id_con'])
                            ->where('tipo_con', 'Telefone')
                            ->update(['contato_con' => $dados['input-Tel']]);
        
                if(isset($dados['input-Cel'])){
                    DB::table('cafe_contatos')
                                ->where('id_con', $dados_usuario['celular']['id_con'])
                                ->where('tipo_con', 'Celular')
                                ->update(['contato_con' => $dados['input-Cel']]);
                }

                return redirect(route('app.home'))->with('sucesso', 'Dados atualizados com sucesso');
            }else{
                return redirect()->back()->with('erro', 'E-mail inválido, por favor informe um e-mail válido.');
            }
        }else{
            $dados_invalidos = '';
            foreach ($dados as $dado){
                $dados_invalidos .= '';
            }

            return redirect()->back()->with('erro', 'Alguns dados foram preenchidos incorretamente: '.$dados_invalidos);
        }

    }

    public function perfil(Request $request){
        $dados_usuario = $this->getUsuarioDados(Auth::user()->id);
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->image->getClientOriginalName().strtotime("now")).".".$extension;        

            $request->image->move(public_path('src/perfil'), $imageName);
    
            DB::table('cafe_foto_perfis')
                            ->where('id_fp', $dados_usuario['fk_idTipoPerfil_usu'])
                            ->update(['nomeFoto_fp' => $imageName]);

        }

        return redirect(route('app.home'))->with('sucesso', 'Imagem de perfil atualizados com sucesso');
    }

    public function password(Request $request){
        $dados_usuario = $this->getUsuarioDados(Auth::user()->id);
        $dados = $this->tratamentoSQL($request->all());

        DB::table('cafe_usuarios')
                            ->where('id', $dados_usuario['id'])
                            ->update([
                                        'password' => $dados['input-Password']
                                    ]);
        

        return redirect(route('app.home'))->with('sucesso', 'Senha atualizada com sucesso');
    }

}
