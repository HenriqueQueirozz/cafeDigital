@extends('layouts.etapas_cadastro')

@section('title', 'Dados de endereço')
@section('etapa', 'Dados de endereço')
@section('descricao', 'Informe os dados referentes ao seu endereço')

@section('content')
    <div>
        <!-- <h1 class="main-title-second mt-24">Continuar Cadastro</h1> -->
        <!-- <h2 class="main-subtitle-second">Falta só mais essas informações</h2> -->
        <form method="POST" action="{{ route('register') }}" class="main-form">
            @csrf
            <input type="hidden" id="id-input-Ibge" name="input-Ibge">

            <div class="main-form-aside">
                <div class="main-form-input">
                    <label for="id-input-Cpe" class="main-label">CPE:<span class="main-form-obrigatorio">*</span></label>
                    <br><input class="main-input" type="text" id="id-input-Cpe" name="input-Cpe" placeholder="00000-000" maxlength="8">
                </div>
                <div class="main-form-input aside">
                    <label for="id-input-Bairro" class="main-label">Bairro:<span class="main-form-obrigatorio">*</span></label>
                    <br><input class="main-input" type="text" id="id-input-Bairro" name="input-Bairro" placeholder="Exemplo II" maxlength="20">
                </div>
            </div>
            <div class="main-form-aside">
                <div class="main-form-input">
                    <label for="id-input-Log" class="main-label">Logradouro:<span class="main-form-obrigatorio">*</span></label>
                    <br><input class="main-input" type="text" id="id-input-Log" name="input-Log" placeholder="Rua: Example II" max="80">
                </div>
                <div class="main-form-input aside">
                    <label for="id-input-Num" class="main-label">Número:<span class="main-form-obrigatorio">*</span></label>
                    <br><input class="main-input" type="number" id="id-input-Num" name="input-Num" placeholder="000" maxlength="10">
                </div>
            </div>
            <div class="main-form-input">
                <label for="id-input-Comp" class="main-label">Complemento:</label>
                <br><input class="main-input" type="text" id="id-input-Comp" name="input-Comp" placeholder="Casa / Apartamento" maxlength="20">
            </div>
            

            <!-- <div class="main-form-input mb-1 mt-0-75">
                <input type="checkbox" name="input-Termos-Condicoes" id="id-input-Termos-Condicoes">
                <label for="id-input-Termos-Condicoes">Aceito os <b>Termos & Condições de uso</b></label>
            </div> -->
            <button class="btn main-btn btn main-btn w-100 h-14 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="submit" id="main-finalizarCadastro" style="height: 75px;">Avançar</button>
        </form>
    </div>
@endsection
