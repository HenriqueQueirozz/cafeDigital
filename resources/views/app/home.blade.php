@extends('layouts.app')
@section('title', 'Mapa de associados')

<style>
    .meu-perfil{
        color: #AABEDB;
    }
</style>

@section('content')
    <div class="float-right">
        <div class="text-ellipsis overflow-hidden m-8">
            <h1 class="text-2xl mb-2">Dados Gerais</h1>
            <div class="bg-mainBodyColorAlt grid lg:grid-cols-4 rounded-lg sm:grid-cols-2 lg:pt-4 lg:pb-8 2xl:pt-8 2xl:pb-16">
                <div class="main-form-input" id="div-id"><br>
                    <label for="id-input-Id" class="main-label label-light">ID:</label>
                    <br><input class="main-input input-light" type="number" id="id-input-Id" name="input-Id" placeholder="000000">
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Nome" class="main-label label-light">Nome:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Nome" name="input-Nome" placeholder="Noah Enzo Murilo" maxlength="100">
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Cpf" class="main-label label-light">Documento CPF:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Cpf" name="input-Cpf" placeholder="000.000.000-00" maxlength="11">
                </div>
                <div class="main-form-input" id="div-email"><br>
                    <label for="id-input-Email" class="main-label label-light">E-mail:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Email" name="input-Email" placeholder="email@exemplo.com">
                </div> 
                <div class="main-form-input"><br>
                    <label for="id-input-Sexo" class="main-label label-light">Sexo:</label>
                    <br><input class="main-input input-light input-sexo-light" id="id-input-Sexo" name="input-Sexo" placeholder="Masculino">
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Rg" class="main-label label-light">Registro Geral:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Rg" name="input-Rg" placeholder="00.000.000-0" maxlength="9">
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Data" class="main-label label-light">Data de Nascimento:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Data" name="input-Data" placeholder="00/00/0000" maxlength="10">
                </div>
                <div class="main-form-input mb-8"><br>
                    <label for="id-input-Nome" class="main-label label-light">Cadastro em:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Nome" name="input-Nome" placeholder="00-00-0000" maxlength="100">
                </div>
            </div>
            <h1 class="text-2xl xl:mt-4 2xl:mt-24 mb-2">Dados de Usuário</h1>
            <div class="bg-mainBodyColorAlt grid lg:grid-cols-4 rounded-lg sm:grid-cols-2 rounded-lg lg:pt-4 lg:pb-8 2xl:pt-8 2xl:pb-16">
                <div class="main-form-input"><br>
                    <label for="id-input-Cpe" class="main-label label-light">CPE:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Cpe" name="input-Cpe" placeholder="49072-230" maxlength="8">
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Cidade" class="main-label label-light">Cidade:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Cidade" name="input-Cidade" maxlength="20" placeholder="Aracaju-SE">
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Bairro" class="main-label label-light">Bairro:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Bairro" name="input-Bairro" maxlength="20" placeholder="Dezoito do Forte">
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Log" class="main-label label-light">Logradouro:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Log" name="input-Log" max="80" placeholder="Rua Eliseu Santos">
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Num" class="main-label label-light">Número:</label>
                    <br><input class="main-input input-light" type="number" id="id-input-Num" name="input-Num" maxlength="10" placeholder="230">
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Comp" class="main-label label-light">Complemento:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Comp" name="input-Comp" placeholder="Casa / Apartamento" maxlength="20">
                </div>
                <div class="main-form-input"><br>
                    <label for="id-input-Tel" class="main-label label-light">Telefone:</label>
                    <br><input class="main-input input-light" type="text" id="id-input-Tel" name="input-Tel" placeholder="(00) 0000-0000" maxlength="13">
                </div>
                <div class="m-8 text-center">
                    <a href="#" class="text-primary-0 text-sm hover:text-primary-400">Alterar senha?</a>
                </div>
            </div>
        </div>
    </div>
@endsection