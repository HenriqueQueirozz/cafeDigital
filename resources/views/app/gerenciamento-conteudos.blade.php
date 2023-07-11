@extends('layouts.app')
@section('title', 'Gerenciamento de Conteúdos')

<style>
    .conteudos{
        color: #AABEDB;
    }

    #perfilImagem{
        display: none;
    }

    .form-group{
        color: white;
    }

    .container{
        border-bottom: 1px solid black;
        border-radius: 15px;
        margin-top: 10%;
    }

    .hidden{
        display: none;
    }

    .alert{
        color: #84e1bc;
        text-align: center;
    }
    
</style>

@section('content')
    <div class="container w-full h-3/5 p-20 bg-mainBodyColorAlt">
        <h1 class="main-title-second mb-6">Adicionar Conteúdo</h1>

        <form action="{{ route('conteudos.store') }}" method="POST">
            @csrf

            <div class="form-group mb-7">
                <label for="link" class="decoration-white">Link:</label>
                <br><input type="text" name="link" id="link" class="form-control w-full input-light" value="">
            </div>

            <div class="form-group mb-7">
                <label for="titulo" class="decoration-white">Título:</label>
                <br><input type="text" name="titulo" id="titulo" class="form-control w-full input-light" value="">
            </div>

            <div class="form-group mb-7">
                <label for="descricao" class="decoration-white">Descrição:</label>
                <br><textarea name="descricao" id="descricao" class="form-control w-full input-light resize-none h-20"></textarea>
            </div>

            <button class="btn-vermelho main-btn w-100 h-12 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600 flex justify-center items-center" type="submit">Adicionar</button>
        </form>

        @if (session('success'))
            <div class="alert alert-success flash-message">
                {{ session('success') }}
            </div>
        @endif

        <script>
            setTimeout(function() {
                document.querySelector('.flash-message').classList.add('hidden');
            }, 3000);
        </script>

    </div>
@endsection