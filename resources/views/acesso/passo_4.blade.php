@extends('layouts.etapas_cadastro')

@section('title', 'Escolha seu plano')
@section('etapa', 'Escolha seu plano')
@section('descricao', '')

@section('content')
    <div>
        <form method="POST" action="{{ route('register') }}" class="main-form">
            @csrf
            <button class="btn main-btn btn main-btn w-100 h-14 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="submit" id="main-continuarCadastro">Avançar</button>
        </form>
    </div>
        <!-- <div class="plano-card py-8">
            <h2 class="text-xl font-bold">Frater</h2>
            <p class="text-base card-subtitle">Lorem ipsum dolor sit amet</p>
            <div class="card-body">
                <p><i class="bi bi-check"></i>
                    Lorem ipsum dolor sit amet lectus ac dictum</p>
                <p><i class="bi bi-check"></i>
                    Lorem ipsum dolor sit amet lectus ac dictum</p>
            </div>
            <h1 class="text-2xl">R$ 199,00 / mês</h1>
            <button class="btn w-100 h-8 rounded-lg pr-10 pl-10 text-mainInputColor bg-secondary-400" onclick="window.location.href='../'">Contratar</button>
        </div>
        <div class="plano-card py-8">
            <h2 class="text-xl font-bold">Club Owner</h2>
            <p class="card-subtitle text-base">Lorem ipsum dolor sit amet</p>
            <div class="card-body">
                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus ac dictum</p>
                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus</p>
                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus ac dictum</p>
            </div>
            <h1 class="text-2xl">R$ 615,00 / mês</h1>
            <button class="btn w-100 h-8 rounded-lg pr-10 pl-10 text-mainInputColor bg-secondary-400" onclick="window.location.href='../'">Contratar</button>
        </div> -->
    
@endsection

               
