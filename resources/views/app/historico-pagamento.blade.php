@extends('layouts.app')
@section('title', 'Histórico de pagamento')

<style>
    .finaceiro{
        color: #AABEDB;
    }

    #perfilImagem{
        display: none;
    }

</style>

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <h1>Histórico de pagamento</h1>
    <div id="manutencao">
        <h1 class="text-4xl font-bold">Em manutenção!</h1><br>
        <h4>Agradecemos o interesse em nosso site, porém no momento,<br> esta funcionalidade está em desenvolvimento.</h4>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection