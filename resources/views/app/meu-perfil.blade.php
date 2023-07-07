@extends('layouts.app')
@section('title', 'Meu perfil')

@section('content')
    <h1>Dados Gerais</h1>
    <section>
        <div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">ID:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Id" name="input-Id" value="{{ $Dados_gerais['id'] }}">
            </div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Nome completo:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['nome'] }}">
            </div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">CPF:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['cpf'] }}">
            </div>
        </div>
        <div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">E-mail:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['email'] }}">
            </div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Sexo:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['sexo'] }}">
            </div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">RG:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['rg'] }}">
            </div>
        </div>
        <div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Data de Nascimento:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['data_nascimento'] }}">
            </div>
            <div class="main-form-input">
                <p>{{ $Dados_gerais['conta'] }}</p>
            </div>
        </div>
    </section>

    <h1>Dados de Usuário</h1>
    <section>
        <div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Cidade:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['cidade'] }}">
            </div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Estado:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['estado'] }}">
            </div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">CEP:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['cep'] }}">
            </div>
        </div>
        <div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Rua:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['rua'] }}">
            </div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Bairro:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['bairro'] }}">
            </div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Número:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['numero'] }}">
            </div>
        </div>
        <div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Complemento:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['complemento'] }}">
            </div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Celular:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['celular'] }}">
            </div>
            <div class="main-form-input">
                <label for="" class="main-label label-dark">Telefone:</label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" value="{{ $Dados_gerais['telefone'] }}">
            </div>
            <p>Alterar senha de acesso?</p>
        </div>
    </section>
@endsection