@extends('layouts.app')
@section('title', 'Conteúdos')

<style>
    .conteudos{
        color: #AABEDB;
    }

    #perfilImagem{
        display: none;
    }

</style>

@section('content')

    @for($i = 0; $i < count($conteudos); $i++)
        <div class="grid gap-3 grid-cols-3 justify-items-center bg-mainBodyColorAlt">
            <div class="conteudo-card text-mainInputColor">
                <h3 class="block">{{$conteudos[$i]['titulo_con']}}</h3>
                <iframe width="300" height="180" src="{{$conteudos[$i]['link_con']}}"></iframe>
                <p>{{$conteudos[$i]['descricao_con']}}</p>
            </div>
        </div>
    @endfor

@endsection