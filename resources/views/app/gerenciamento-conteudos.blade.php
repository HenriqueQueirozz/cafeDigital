@extends('layouts.app')
@section('title', 'Gerenciamento de Conteúdos')

@section('content')
    <div class="container">
        <h1>Adicionar Conteúdo</h1>

        <form action="{{ route('conteudos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for = "link">Link:</label>
                <input type = "text" name = "link" id = "link" class = "form-control" value = "">
            </div>

            <div class="form-group">
                <label for = "titulo">Título:</label>
                <input type = "text" name = "titulo" id = "titulo" class = "form-control" value = "">
            </div>

            <div class = "form-group">
                <label for = "descricao">Descrição:</label>
                <textarea name = "descricao" id = "descricao" class = "form-control"></textarea>
            </div>

            <button type = "submit">Salvar</button>
        </form>
    </div>
@endsection