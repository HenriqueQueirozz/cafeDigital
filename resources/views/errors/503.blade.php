@extends('layouts.erros')
@section('content')
    <div class='c'>
        <div class='_erro'>503</div>
        <hr>
        <div class='_1'>ESSE SERVIÇO</div>
        <div class='_2'>NÃO ESTÁ DISPONÍVEL</div>
        <a class='btn' href="{{ route('app.home') }}">VOLTAR PARA HOME</a>
    </div>
@endsection