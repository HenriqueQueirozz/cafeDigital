@extends('layouts.app')
@section('title', 'Conteúdos')

<style>
    .conteudos{
        color: #AABEDB;
    }

    #perfilImagem{
        display: none;
    }

    .conteudo-geral{
        height: 1200px;
    }

    .conteudo-card{
        width: 40%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

</style>

@section('content')
        <div class="flex items-center flex-col bg-mainBodyColorAlt">   
            <div>
                <h3 class="text-2xl text-mainInputColor text-center m-4">Conteúdos</h3>
            </div>
            <div class="grid grid-cols-2">
                @for($i = 0; $i < count($conteudos); $i++)
                    <div class="conteudo-card text-mainInputColor ml-32 mr-32">
                        <p class="conteudo-title mt-4 text-base">{{$conteudos[$i]['titulo_con']}}</p><br>
                        <iframe width="250" height="160" src="{{ $conteudos[$i]['link_con'] }}" class="p-2"></iframe>
                        <p class="mb-4 text-sm">{{$conteudos[$i]['descricao_con']}}</p>
                    </div>
                @endfor
            </div>
            <a href="{{ route('app.gerenciar-conteudos') }}" class="bg-secondary-400 text-mainInputColor p-3 rounded-full items-end mt-4 mb-4">Adicionar conteudo?</a>
        </div>
    <script src="../js/script.js"></script>
@endsection