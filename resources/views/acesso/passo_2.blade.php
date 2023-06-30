@extends('layouts.etapas_cadastro')

@section('title', 'Dados do usuário')
@section('etapa', 'Dados do usuário')
@section('descricao', 'Informe os seus dados pessoais')

@section('content')
    <div>
        <!-- <h1 class="main-title-second">Continuar cadastro</h2> -->
        <form method="POST" action="{{ route('register') }}" class="main-form">
            @csrf

            <div class="main-form-input">
                <label for="id-input-Cpf" class="main-label">Documento CPF:<span class="main-form-obrigatorio">*</span></label>
                <br><input class="main-input" type="text" id="id-input-Cpf" name="input-Cpf" placeholder="000.000.000-00" maxlength="11">
            </div>

            <div class="main-form-input">
                <label for="id-input-Rg" class="main-label">Registro Geral:<span class="main-form-obrigatorio">*</span></label>
                <br><input class="main-input" type="text" id="id-input-Rg" name="input-Rg" placeholder="00.000.000-0" maxlength="9">
            </div>

            <div class="main-form-aside">
                <div class="main-form-input">
                    <label for="id-input-Data" class="main-label">Data de Nascimento:<span class="main-form-obrigatorio">*</span></label>
                    <br><input class="main-input" type="text" id="id-input-Data" name="input-Data" placeholder="00/00/0000" maxlength="10">
                </div>
                <div class="main-form-input aside">
                    <label for="id-input-Sexo" class="main-label">Sexo:<span class="main-form-obrigatorio">*</span></label>
                    <br><select class="main-input main-input-sexo" id="id-input-Sexo" name="input-Sexo">
                        <option value=""></option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="O">Outros</option>
                    </select>
                </div>
            </div>

            <div class="main-form-aside">
                <div class="main-form-input">
                    <label for="id-input-Tel" class="main-label">Telefone:</label>
                    <br><input class="main-input" type="text" id="id-input-Tel" name="input-Tel" placeholder="(00)0000-0000" maxlength="13">
                </div>
                <div class="main-form-input aside">
                    <label for="id-input-Cel" class="main-label">Celular:<span class="main-form-obrigatorio">*</span></label>
                    <br><input class="main-input" type="text" id="id-input-Cel" name="input-Cel" placeholder="(00)00000-0000" maxlength="13">
                </div>
            </div>

            <button class="btn main-btn btn main-btn w-100 h-14 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="submit" id="main-continuarCadastro">Avançar</button>
        </form>
    </div>
@endsection