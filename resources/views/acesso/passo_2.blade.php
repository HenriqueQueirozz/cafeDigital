@extends('layouts.etapas_cadastro')

@section('title', 'Dados do usuário')
@section('etapa', 'Dados do usuário')
@section('descricao', 'Informe os seus dados pessoais')

@section('content')
    <div class="main-session-etapa">
        <!-- <h1 class="main-title-second">Continuar cadastro</h2> -->
        @if($errors->any())
            <div class="flex justify-center" id="message-div" style="display: block">
                <h3 class="text-2xl text-mainInputColor fixed top-5 right-28 pointer z-10" onclick="RemoverMensagem()">x</h3>
                <div class="message">
                    @foreach($errors->all() as $error)
                            {{ $error }} <br>
                    @endforeach
                </div>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="main-form">
            @csrf
            <div class="main-form-input">
                <label for="id-input-Cpf" class="main-label label-dark">Documento CPF:<span class="main-form-obrigatorio">*</span></label>
                <br><input class="main-input input-dark" type="text" id="id-input-Cpf" name="input-Cpf" placeholder="000.000.000-00" maxlength="11" required onchange="validarCPF()">
            </div>
            <div class="main-form-input">
                <label for="id-input-Rg" class="main-label label-dark">Registro Geral:<span class="main-form-obrigatorio">*</span></label>
                <br><input class="main-input input-dark" type="text" id="id-input-Rg" name="input-Rg" placeholder="00.000.000-0" maxlength="9">
            </div>
            <div class="main-form-aside">
                <div class="main-form-input">
                    <label for="id-input-Data" class="main-label label-dark">Data de Nascimento:<span class="main-form-obrigatorio">*</span></label>
                    <br><input class="main-input input-dark" type="text" id="id-input-Data" name="input-Data" placeholder="00/00/0000" maxlength="10">
                </div>
                <div class="main-form-input aside">
                    <label for="id-input-Sexo" class="main-label label-dark">Sexo:<span class="main-form-obrigatorio">*</span></label>
                    <br><select class="main-input input-dark input-sexo-dark" id="id-input-Sexo" name="input-Sexo">
                        <option value=""></option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="O">Outros</option>
                    </select>
                </div>
            </div>

            <div class="main-form-aside">
                <div class="main-form-input">
                    <label for="id-input-Tel" class="main-label label-dark">Telefone:</label>
                    <br><input class="main-input input-dark" type="text" id="id-input-Tel" name="input-Tel" placeholder="(00)0000-0000" maxlength="13">
                </div>
                <div class="main-form-input aside">
                    <label for="id-input-Cel" class="main-label label-dark">Celular:<span class="main-form-obrigatorio">*</span></label>
                    <br><input class="main-input input-dark" type="text" id="id-input-Cel" name="input-Cel" placeholder="(00)00000-0000" maxlength="13">
                </div>
            </div>
            <button class="btn-vermelho w-100 h-12 rounded-lg pr-20 pl-20 m-auto text-mainInputColor bg-red-600" type="submit">Avançar</button>
        </form>
    </div>
@endsection