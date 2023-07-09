@extends('layouts.app')
@section('title', 'Início')

<style>
    .meu-perfil{
        color: #AABEDB;
    }
</style>

@section('content')
    <div class="float-right">
        <div id="home-conteudo" class="text-ellipsis overflow-hidden m-8 2xl">
            <h1 class="text-2xl mb-2 2xl:text-3xl xl:text-xl">Dados de Usuário</h1>
            <div class="home-column bg-mainBodyColorAlt grid lg:grid-cols-4 sm:grid-cols-2 lg:pt-4 lg:pb-8 2xl:pt-8 2xl:pb-16">
                <div class="main-form-input" id="div-id"><br>
                    <label for="id-input-Id" class="main-label label-light">ID:</label>
                    <br><input class="main-input input-light" type="number" id="id-input-Id" name="input-Id" placeholder="000000" value="{{ $Dados_gerais['id'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Nome" class="main-label label-light">Nome:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Nome" name="input-Nome" placeholder="Noah Enzo Murilo" maxlength="100" value="{{ $Dados_gerais['nome'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Cpf" class="main-label label-light">Documento CPF:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Cpf" name="input-Cpf" placeholder="000.000.000-00" maxlength="11" value="{{ $Dados_gerais['cpf'] }}" readonly>
                </div>
                <div class="main-form-input" id="div-email"><br>
                    <label for="id-input-Email" class="main-label label-light">E-mail:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Email" name="input-Email" placeholder="email@exemplo.com" value="{{ $Dados_gerais['email'] }}" readonly>
                </div> 
                <div class="main-form-input"><br>
                    <label for="id-input-Sexo" class="main-label label-light">Sexo:</label>
                    <br><input class="main-input input-light input-sexo-light" id="id-input-Sexo" name="input-Sexo" placeholder="Masculino" value="{{ $Dados_gerais['sexo'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Rg" class="main-label label-light">Registro Geral:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Rg" name="input-Rg" placeholder="00.000.000-0" maxlength="9" value="{{ $Dados_gerais['rg'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Data" class="main-label label-light">Data de Nascimento:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Data" name="input-Data" placeholder="00/00/0000" maxlength="10" value="{{ $Dados_gerais['data_nascimento'] }}" readonly>
                </div>
                <div class="m-8 text-center">
                    <a href="#" class="text-primary-0 text-sm hover:text-secondary-200">Alterar senha?</a>
                </div>
            </div>
            <h1 class="text-2xl xl:mt-4 2xl:mt-24 mb-2 2xl:text-3xl xl:text-xl">Dados Gerais</h1>
            <div class="home-column bg-mainBodyColorAlt grid lg:grid-cols-4 sm:grid-cols-2 lg:pt-4 lg:pb-8 2xl:pt-8 2xl:pb-16">
                <div class="main-form-input"><br>
                    <label for="id-input-Cpe" class="main-label label-light">CPE:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Cpe" name="input-Cpe" placeholder="49072-230" maxlength="8" value="{{ $Dados_gerais['cep'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Cidade" class="main-label label-light">Cidade:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Cidade" name="input-Cidade" maxlength="20" placeholder="Aracaju-SE" value="{{ $Dados_gerais['cidade'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Bairro" class="main-label label-light">Bairro:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Bairro" name="input-Bairro" maxlength="20" placeholder="Dezoito do Forte" value="{{ $Dados_gerais['bairro'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Log" class="main-label label-light">Logradouro:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Log" name="input-Log" max="80" placeholder="Rua Eliseu Santos" value="{{ $Dados_gerais['rua'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Num" class="main-label label-light">Número:</label>
                    <br><input class="main-input input-light" type="number" id="id-input-Num" name="input-Num" maxlength="10" placeholder="230" value="{{ $Dados_gerais['numero'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Comp" class="main-label label-light">Complemento:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Comp" name="input-Comp" placeholder="Casa / Apartamento" maxlength="20" value="{{ $Dados_gerais['complemento'] }}" readonly>
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Tel" class="main-label label-light">Telefone:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Tel" name="input-Tel" placeholder="(00) 0000-0000" maxlength="13" value="{{ $Dados_gerais['telefone'] }}" readonly>
                </div>
                <div class="main-form-input mb-4"><br>
                    <label for="id-input-Nome" class="main-label label-light">Cadastro em:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Nome" name="input-Nome" placeholder="00-00-0000" maxlength="100" readonly>
                </div>
            </div>
        </div>
    </div>
@endsection