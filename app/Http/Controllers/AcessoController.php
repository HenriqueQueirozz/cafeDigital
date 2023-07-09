<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CafeUsuarioController;
use App\Http\Controllers\CafeEnderecoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\CafeEndereco;
use App\Models\CafeContato;
use App\Models\CafeFotoPerfil;

class AcessoController extends Controller
{
    public function authenticacao(Request $request){
        if(empty($request['input-Id']) && $request['input-Email']){
            $credentials = $request->validate(
                [
                    'input-Email' => ['required', 'email'],
                    'input-Pass' => ['required'],
                ],
                [
                    'input-Email.required' => 'O campo E-mail é obrigatório!',
                    'input-Email.email' => 'O E-mail não é válido!',
                    'input-Pass.required' => 'O campo Senha é obrigatório!'
                ]
            );

            $credentials = [
                'email_usu' => $credentials['input-Email'],
                'password' => $credentials['input-Pass'],
            ];
        }else{
            $credentials = $request->validate(
                [
                    'input-Id' => ['required'],
                    'input-Pass' => ['required'],
                ],
                [
                    'input-Id.required' => 'O campo ID é obrigatório!',
                    'input-Pass.required' => 'O campo Senha é obrigatório!'
                ]
            );

            $credentials = [
                'codigo_usu' => $credentials['input-Id'],
                'password' => $credentials['input-Pass'],
            ];
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(auth()->check()){
                $etapa = auth()->user()->fk_idAberturaEtapa_usu;
                    
                switch ($etapa){
                    case 2:
                        // Dados do usuario
                        return redirect('dados-do-usuario');
                        break;
                    case 3:
                        // Dados de endereco
                        return redirect('dados-de-endereco');
                        break;
                    case 4:
                        // Escolha de plano
                        return redirect('escolha-de-plano');
                        break;
                    case 5:
                        // Pagamento
                        return redirect('pagamento');
                        break;
                    case 6:
                        // Finalizado
                        return redirect()->intended(route('app.home'));
                        break;
                }
            }else{
                return redirect('login');
            }
        }else{
            if(empty($request['input-Id']) && $request['input-Email']){
                return redirect()->back()->with('erro', 'E-mail ou senha inválida.');
            }else{
                return redirect()->back()->with('erro', 'ID ou senha inválida.');
            }
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }

    public function register(Request $request){
        $CafeUsuarioController = new CafeUsuarioController;
        $CafeEnderecoController = new CafeEnderecoController;

        if(isset($request['input-Email'])){
            $credentials = $request->validate(
                [
                    'input-Nome' => ['required'],
                    'input-Email' => ['required', 'email'],
                    'input-Senha' => ['required'],
                    'input-ConfirmeSenha' => ['required'],
                ],
                [
                    'input-Nome.required' => 'O campo Nome é obrigatório!',
                    'input-Email.required' => 'O campo E-mail é obrigatório!',
                    'input-Email.email' => 'O E-mail não é válido!',
                    'input-Senha.required' => 'O campo Senha é obrigatório!',
                    'input-ConfirmeSenha.required' => 'O campo de confirmação de senha é obrigatório!',
                ]
            );

            $emailExistente = $CafeUsuarioController->getUsuarioByEmail($request['input-Email']);

            if(!$emailExistente){
                $codigoExistente = true;

                while($codigoExistente){
                    $codigo          = random_int(100000, 999999);
                    $codigoExistente = $CafeUsuarioController->getUsuarioByCodigo($codigo);
                }

                $CafeFotoPerfil = CafeFotoPerfil::create();

                // Dados da conta
                $cafeUsuario['nome_usu']               = $request['input-Nome'];
                $cafeUsuario['email_usu']              = $request['input-Email'];
                $cafeUsuario['codigo_usu']             = $codigo;
                $cafeUsuario['password']               = bcrypt($request['input-Senha']);
                $cafeUsuario['fk_idAberturaEtapa_usu'] = 2;
                $cafeUsuario['fk_idFotoPerfil_usu']    = $CafeFotoPerfil->id_fp;
                $cafeUsuario = User::create($cafeUsuario);
    
                Auth::login($cafeUsuario);
    
                return redirect('dados-do-usuario');
            }else{
                return redirect()->back()->with('erro', 'O e-mail já se encontra em uso, por favor informe um e-mail válido.');
            }
        }

        if(auth()->check()){
            $etapa = auth()->user()->fk_idAberturaEtapa_usu;
            $cafeUsuario = User::find(auth()->user()->id);
        }else{
            return redirect('cadastro'); 
        }

        $user = $request->all();
        $user = $CafeUsuarioController->tratamentoSQL($user);

        switch ($etapa){
            case 2:
                $credentials = $request->validate(
                    [
                        'input-Cpf' => ['required'],
                        'input-Rg' => ['required'],
                        'input-Data' => ['required'],
                        'input-Sexo' => ['required'],
                        'input-Tel' => ['required'],
                        'input-Cel' => ['required'],
                    ],
                    [
                        'input-Cpf.required' => 'O campo Cpf é obrigatório!',
                        'input-Rg.required' => 'O campo Rg é obrigatório!',
                        'input-Data.required' => 'O campo Data de Nascimento é obrigatório!',
                        'input-Sexo.required' => 'O campo Sexo é obrigatório!',
                        'input-Tel.required' => 'O campo Telefone é obrigatório!',
                        'input-Cel.required' => 'O campo Celular é obrigatório!',
                    ]
                );

                // Dados do usuário
                $CafeContato = new CafeContato;

                $CafeContato->contato_con           = $user['input-Tel'];
                $CafeContato->tipo_con              = 'Telefone';
                $CafeContato->fk_idUsuario_con      = auth()->user()->id;

                $CafeContato->save();

                $CafeContato = new CafeContato;

                $CafeContato->contato_con           = $user['input-Cel'];
                $CafeContato->tipo_con              = 'Celular';
                $CafeContato->fk_idUsuario_con      = auth()->user()->id;

                $CafeContato->save();

                $cafeUsuario->cpf_usu                   = $user['input-Cpf'];
                $cafeUsuario->rg_usu                    = $user['input-Rg'];
                $cafeUsuario->dataNascimento_usu        = $user['input-Data'];
                $cafeUsuario->sexo_usu                  = $user['input-Sexo'];
                $cafeUsuario->fk_idAberturaEtapa_usu    = 3;

                $cafeUsuario->save();
                return redirect('dados-de-endereco');
                break;
            case 3:
                $credentials = $request->validate(
                    [
                        'input-Cpe' => ['required'],
                        'input-Bairro' => ['required'],
                        'input-Log' => ['required'],
                        'input-Num' => ['required'],
                        'input-Comp' => ['required'],
                    ],
                    [
                        'input-Cpe.required' => 'O campo CEP é obrigatório!',
                        'input-Bairro.required' => 'O campo Bairro é obrigatório!',
                        'input-Log.required' => 'O campo Logradouro é obrigatório!',
                        'input-Num.required' => 'O campo Número é obrigatório!',
                        'input-Comp.required' => 'O campo Complemento é obrigatório!',
                    ]
                );

                // Endereço
                $CafeEndereco = new CafeEndereco();
                $informacoesCidade = $CafeEnderecoController->getCidadeByCodigoIbge($user['input-Ibge']);

                $CafeEndereco->rua_end                  = $user['input-Log'];
                $CafeEndereco->bairro_end               = $user['input-Bairro'];
                $CafeEndereco->numero_end               = $user['input-Num'];
                $CafeEndereco->cep_end                  = $user['input-Cpe'];
                $CafeEndereco->complemento_end          = $user['input-Comp'];
                $CafeEndereco->fk_idCidade_end          = $informacoesCidade->id_cid;

                $CafeEndereco->save();

                $cafeUsuario->fk_idEndereco_usu         = $CafeEndereco->id;
                $cafeUsuario->fk_idAberturaEtapa_usu    = 4;

                $cafeUsuario->save();
                return redirect('escolha-de-plano');
                break;
            case 4:
                if(empty($user['input-Codigo'])){
                    $usuarioIndicacao = false;
                }else{
                    $codigoExistente = $CafeUsuarioController->getUsuarioByCodigo($user['input-Codigo']);
                    if($codigoExistente){
                        $usuarioIndicacao = $codigoExistente['id'];
                    }else{
                        return redirect()->back()->with('erro', 'O código de indicação informado não foi localizado, por favor informe um código válido.');
                    }
                }

                // Escolha de plano
                $cafeUsuario->fk_idTipoPerfil_usu       = $user['input-Plano'];
                $cafeUsuario->fk_idUsuarioIndicacao     = $usuarioIndicacao;
                $cafeUsuario->fk_idAberturaEtapa_usu    = 5;

                $cafeUsuario->save();
                return redirect('pagamento');
                break;
            case 5:
                // Pagamento
                $cafeUsuario->fk_idAberturaEtapa_usu    = 6;

                $cafeUsuario->save();
                return redirect(route('app.home'));
                break;
        }
    }
}
