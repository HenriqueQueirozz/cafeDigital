@extends('layouts.app')
@section('title', 'Início')
@section('content')
    <style>
        .meu-perfil{
            color: #AABEDB;
        }

    </style>
    <form method="POST" action="{{ route('v1.salvar_dados_usuarios') }}">
        @csrf
        <div id="home-conteudo" class="text-ellipsis overflow-hidden ml-8 mr-8">
            @if($mensagem = Session::get('erro'))
                <div class="flex justify-center mt-10"> 
                    <div class="w-96 bg-red-300 py-3 rounded-md">
                        {{ $mensagem }}
                    </div>
                </div>
            @endif

            @if($errors->any())
                <div class="flex justify-center mt-10"> 
                    <div class="w-96 bg-red-300 py-3 rounded-md">
                        @foreach($errors->all() as $error)
                            {{ $error }} <br>
                        @endforeach
                    </div>
                </div>
            @endif
            <h1 class="text-2xl mb-2 2xl:text-3xl xl:text-xl">Dados de Usuário</h1>
            <div class="home-column bg-mainBodyColorAlt grid lg:grid-cols-4 sm:grid-cols-2 lg:pt-4 lg:pb-8 2xl:pt-8 2xl:pb-16">
                <div class="main-form-input" id="div-id"><br>
                    <label for="id-input-Id" class="main-label label-light">ID:</label>
                    <br><input class="main-input input-light" type="number" id="id-input-Id" name="input-Id" placeholder="000000" value="{{ $dados_usuario['codigo_usu'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Nome" class="main-label label-light">Nome:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Nome" name="input-Nome" placeholder="Noah Enzo Murilo" maxlength="100" value="{{ $dados_usuario['nome_usu'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Cpf" class="main-label label-light">Documento CPF:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Cpf" name="input-Cpf" placeholder="000.000.000-00" maxlength="11" value="{{ $dados_usuario['cpf_usu'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="main-form-input" id="div-email"><br>
                    <label for="id-input-Email" class="main-label label-light">E-mail:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Email" name="input-Email" placeholder="email@exemplo.com" value="{{ $dados_usuario['email_usu'] }}" {{ $editar ? '' : 'readonly' }}>
                </div> 
                <div class="main-form-input"><br>
                    <label for="id-input-Sexo" class="main-label label-light">Sexo:</label>
                @if(!$editar)
                    <br><input class="main-input input-light input-sexo-light" id="id-input-Sexo" name="input-Sexo" placeholder="Masculino" value="{{ $dados_usuario['sexo_usu'] }}" readonly>
                @else
                    <br><select class="main-input input-light input-sexo-light" id="id-input-Sexo" name="input-Sexo">
                        <option value=""></option>
                        <option {{ $dados_usuario['sexo_usu'] == "Masculino" ? 'selected' : '' }} value="M"> Masculino</option>
                        <option {{ $dados_usuario['sexo_usu'] == "Feminino" ? 'selected' : '' }} value="F">Feminino</option>
                        <option {{ $dados_usuario['sexo_usu'] == "Outros" ? 'selected' : '' }} value="O">Outros</option>
                    </select>
                @endif
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Rg" class="main-label label-light">Registro Geral:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Rg" name="input-Rg" placeholder="00.000.000-0" maxlength="9" value="{{ $dados_usuario['rg_usu'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Data" class="main-label label-light">Nascimento:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Data" name="input-Data" placeholder="00/00/0000" maxlength="10" value="{{ $dados_usuario['dataNascimento_usu'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="m-8 text-center">
                    <a href="{{ route('app.senha') }}" class="text-primary-0 text-sm hover:text-secondary-200">Alterar senha?</a>
                </div>
            </div>
            <h1 class="text-2xl xl:mt-2 2xl:mt-12 mb-2 2xl:text-3xl xl:text-xl">Dados Gerais</h1>
            <div class="home-column bg-mainBodyColorAlt grid lg:grid-cols-4 sm:grid-cols-2 lg:pt-4 lg:pb-8 2xl:pt-8 2xl:pb-16">
                <div class="main-form-input"><br>
                    <label for="id-input-Cpe" class="main-label label-light">CPE:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Cpe" name="input-Cpe" placeholder="49072-230" maxlength="8" value="{{ $dados_usuario['cep_end'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Cidade" class="main-label label-light">Cidade-Estado:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Cidade" name="input-Cidade" maxlength="20" placeholder="Aracaju-SE" value="{{ $dados_usuario['nome_cid'] }}-{{ $dados_usuario['uf_est'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Bairro" class="main-label label-light">Bairro:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Bairro" name="input-Bairro" maxlength="20" placeholder="Dezoito do Forte" value="{{ $dados_usuario['bairro_end'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Log" class="main-label label-light">Logradouro:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Log" name="input-Log" max="80" placeholder="Rua Eliseu Santos" value="{{ $dados_usuario['rua_end'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Num" class="main-label label-light">Número:</label>
                    <br><input class="main-input input-light" type="number" id="id-input-Num" name="input-Num" maxlength="10" placeholder="230" value="{{ $dados_usuario['numero_end'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Comp" class="main-label label-light">Complemento:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Comp" name="input-Comp" placeholder="Casa / Apartamento" maxlength="20" value="{{ $dados_usuario['complemento_end'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Tel" class="main-label label-light">Telefone:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Tel" name="input-Tel" placeholder="(00) 0000-0000" maxlength="13" value="{{ $dados_usuario['telefone']['contato_con'] }}" {{ $editar ? '' : 'readonly' }}>
                </div>
                <div class="main-form-input mb-4"><br>
                    <label for="id-input-Nome" class="main-label label-light">Cadastro em:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Cadastro" name="input-Cadastro" placeholder="00/00/0000" maxlength="10" value="{{ $dados_usuario['created_at'] }}" readonly>
                </div>
            </div>

            @if($editar)
            <button class="btn-vermelho w-100 h-12 rounded-lg pr-20 pl-20 m-auto text-mainInputColor bg-red-600 xl:mt-2 2xl:mt-12 ms-auto" type="submit">Salvar dados</button>
            @endif
        </div>
    </form>
@endsection