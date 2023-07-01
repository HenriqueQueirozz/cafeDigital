@extends('layouts.etapas_cadastro')

@section('title', 'Pagamento')
@section('etapa', 'Pagamento')
@section('descricao', '')

@section('content')
    <div class="main-session-etapa">
        <form method="POST" action="{{ route('register') }}" class="main-form">
            @csrf
            <button class="btn main-btn btn main-btn w-100 h-14 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="submit" id="main-continuarCadastro">Avançar</button>
        </form>
    </div>
@endsection