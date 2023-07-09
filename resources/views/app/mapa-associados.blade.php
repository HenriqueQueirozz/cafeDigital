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
    <div class="mapa-conteudo p-16 ml-5 flex 2xl:p-36">
        <div class="mt-auto mb-auto">
            <h1 id="mapa-competencia" class="2xl:text-xl lg:text-xl text-center text-mainInputColor">Competência </h1><!-- Gerar ano -->
            <div class="w-56">
                <canvas id="myChart" class="mapa-grafico"></canvas>
            </div>
        </div>
        <div class="mapa-usuarios ml-24 grid gap-3 grid-cols-6 justify-items-center">
            <div class="col-span-6 mapa-card acept-invite mt-5 p-3">
                <img src="/src/PerfilAuto.png" alt="iconePerfil" class="mapa-imagem">
                <h2 class="text-base">Pablo Henrique Nadai</h2>
                <h3 class="text-sm">09/07/2023</h3>
                <div class="flex mapa-status items-center">
                    <i class="bi bi-check-circle text-mainInputColor m-2"></i>
                    <h3 class="text-mainInputColor text-center">Convidou você!</h3>
                </div>
            </div>
            <div class="col-span-3 mapa-card signature mt-6 p-3">
                <img src="/src/PerfilAuto.png" alt="iconePerfil" class="mapa-imagem">
                <h2 class="text-base">Pablo Henrique Nadai</h2>
                <h3 class="text-sm">09/07/2023</h3>
                <div class="flex mapa-status items-center">
                    <i class="bi bi-check-circle text-mainInputColor m-2"></i>
                    <h3 class="text-mainInputColor">Convite aceito!</h3>
                </div>
            </div>
            <div class="col-span-3 mapa-card signature mt-6 p-3">
                <img src="/src/PerfilAuto.png" alt="iconePerfil" class="mapa-imagem">
                <h2 class="text-base">Pablo Henrique Nadai</h2>
                <h3 class="text-sm">09/07/2023</h3>
                <div class="flex mapa-status items-center">
                    <i class="bi bi-check-circle text-mainInputColor m-2"></i>
                    <h3 class="text-mainInputColor">Convite aceito!</h3>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/mapa-associados.js') }}"></script>
@endsection