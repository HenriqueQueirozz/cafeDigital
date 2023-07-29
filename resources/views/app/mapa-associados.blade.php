@extends('layouts.app')
@section('title', 'Mapa de associados')

<style>
    .associados{
        color: #AABEDB;
    }

    #perfilImagem{
        display: none;
    }

</style>

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <input type="text" class="hidden" value="{{ $qt_indicados }}" id="qt_indicados">
    <input type="text" class="hidden" value="{{ $qt_finalizados }}" id="qt_finalizados">
    <div class="mapa-conteudo p-16 ml-5 flex 2xl:p-36">
        <div class="mt-auto mb-auto">
            <h1 id="mapa-competencia" class="2xl:text-xl lg:text-xl text-center text-mainInputColor">Competência </h1>
            <div class="w-56">
                <canvas id="myChart" class="mapa-grafico"></canvas>
            </div>
        </div>
        <div class="mapa-usuarios ml-24 grid gap-7 grid-cols-3 justify-items-center">
        @foreach ($usuarios_indicados as $usuario)
            <div class="col-span-1 mapa-card signature mt-5 p-3">
                <img src="../src/perfil/{{ $usuario['nomeFoto_fp'] }}" alt="iconePerfil" class="mapa-imagem border-solid border-4 rounded-full border-secondary-500 cursor-pointer">
                <h2 class="text-base">{{ $usuario['nome_usu'] }}</h2>
                <h3 class="text-sm">{{ $usuario['dataNascimento_usu'] }}</h3>
                <div class="flex mapa-status items-center">
                    <i class="bi bi-check-circle text-mainInputColor m-2"></i>
                    <h3 class="text-mainInputColor text-center">Convidou você!</h3>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <script src="../js/mapa_associados.js"></script>
@endsection