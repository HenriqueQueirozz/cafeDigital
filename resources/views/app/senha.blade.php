@extends('layouts.app')
@section('title', 'Alterar senha')

@section('content')

<div class="m-auto">
    <div class="alert"></div>
    <div class="bg-mainBodyColorAlt p-8 rounded-lg">
        <form class="flex flex-col justify-center items-center"> 
            @csrf
            <div class="main-form-input" id="div-id"><br>
                <label for="id-input-SenhaAntiga" class="main-label label-light">Digite a sua senha atual:</label>
                <span class="main-form-obrigatorio">*</span></label>
                <br><input id="id-input-SenhaAntiga" type="password" class="input-light" required>
            </div>
            <div class="main-form-input" id="div-id"><br>
                <label for="id-input-SenhaNova" class="main-label label-light" >Nova senha:</label>
                <span class="main-form-obrigatorio">*</span></label>
                <br><input id="id-input-SenhaNova" type="password" class="input-light" required>
            </div>
            <div class="main-form-input" id="div-id"><br>
                <label for="id-input-SenhaConfirmar" class="main-label label-light">Confirme a senha:</label>
                <span class="main-form-obrigatorio">*</span></label>
                <br><input id="id-input-SenhaConfirmar" type="password" class="input-light" required>
            </div>
            <button id="enviar" class="w-100 h-12 rounded-lg pr-20 pl-20 m-auto text-mainInputColor bg-red-600 xl:mt-2 2xl:mt-12 ms-auto mt-4" onclick="notify()">Salvar</button>
        </form>
    </div>
</div>

@endsection