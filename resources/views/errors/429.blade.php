@extends('layouts.erros')
@section('content')
    <div class='c'>
        <div class='_erro'>429</div>
        <hr>
        <div class='_1'>NEGADO</div>
        <div class='_2'>MUITAS REQUISIÇÕES</div>
        <a class='btn' href="{{ route('app.home') }}">VOLTAR PARA HOME</a>
    </div>
@endsection