@extends('layouts.app')
@section('title', 'Conteúdos')

@section('content')
    <h1>Conteúdos</h1>

    @for($i = 0; $i < count($conteudos); $i++)
        <div>
            <h3>{{$conteudos[$i]['titulo_con']}}</h3>
            <iframe width="420" height="315" src="{{$conteudos[$i]['link_con']}}"></iframe>
            <p>{{$conteudos[$i]['descricao_con']}}</p>
        </div>
    @endfor
@endsection