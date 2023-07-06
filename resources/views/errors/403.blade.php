@extends('layouts.erros')
@section('content')
    <div class='c'>
        <div class='_erro'>403</div>
        <hr>
        <div class='_1'>ESSE ACESSO</div>
        <div class='_2'>NÃO FOI PERMITIDO.</div>
        <a class='btn' href="{{ route('app.home') }}">VOLTAR PARA HOME</a>
    </div>
@endsection