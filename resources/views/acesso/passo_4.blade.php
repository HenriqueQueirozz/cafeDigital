@extends('layouts.etapas_cadastro')

@section('title', 'Escolha seu plano')
@section('etapa', 'Escolha seu plano')
@section('descricao', '')

@section('content')
<div class="alert"></div>
<div class="main-session-planos">
    <div class="plano-card py-8">
        <form method="POST" action="{{ route('register') }}" class="main-form">
            @csrf
        
            <input type="hidden" id="id-input-Ibge" name="input-Plano" value="1">
            <h2 class="text-xl font-bold">Frater</h2>
            <p class="text-base card-subtitle">Lorem ipsum dolor sit amet</p>
            <div class="card-body">
                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus ac dictum</p>
                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus ac dictum</p>
                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus ac dictum</p>
            </div>
            <h1 class="text-2xl">R$ 199,00 / mês</h1>
            <button class="btn main-btn w-100 h-8 rounded-lg pr-10 pl-10 text-mainInputColor bg-red-600" type="submit">Contratar</button>
        </form>
    </div>

    <div class="plano-card py-8">
        <form method="POST" action="{{ route('register') }}" class="main-form">
            @csrf
            <input type="hidden" id="id-input-Ibge" name="input-Plano" value="2">
            <h2 class="text-xl font-bold">Club Owner</h2>
            <p class="card-subtitle text-base">Lorem ipsum dolor sit amet</p>
            <div class="card-body">
                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus ac dictum</p>
                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus ac dictum</p>
                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus ac dictum</p>
            </div>
            <h1 class="text-2xl">R$ 615,00 / mês</h1>
            <button class="btn main-btn w-100 h-8 rounded-lg pr-10 pl-10 text-mainInputColor bg-red-600" type="submit" id="enviar" onclick="notify()">Contratar</button>
        </form>
    </div>
</div>
@endsection

               
