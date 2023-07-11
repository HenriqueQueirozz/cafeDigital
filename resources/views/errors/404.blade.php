@extends('layouts.erros')
@section('content')
    <div class='c'>
        <div class='_erro'>404</div>
        <hr>
        <div class='_1'>ESSA PÁGINA</div>
        <div class='_2'>NÃO FOI ENCONTRADA</div>
        <a class='btn' href="{{ route('app.home') }}">VOLTAR PARA HOME</a>
    </div>
@endsection
