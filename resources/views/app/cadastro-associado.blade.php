@extends('layouts.app')
@section('title', 'Cadastro de associados')

@section('content')
    <h1>Cadastro de associado</h1>


    <form action="" method="POST">
        @csrf
        <label>Nome</label><br>
        <input type="text" name="input-nome-associado"><br><br>

        <label>Data</label><br>
        <input type="date" name="input-data-associado"><br><br>

        <label>Sexo</label><br>
        <input type="radio" name="input-sexo-associado" value="M"> Masculino<br>
        <input type="radio" name="input-sexo-associado" value="F"> Feminino<br>
        <input type="radio" name="input-sexo-associado" value="O"> Outros<br><br>

        <label>CPf</label><br>
        <input type="text" name="input-cpf-associado"><br><br>

        <label>RG</label><br>
        <input type="text" name="input-rg-associado"><br><br>

        <input type="submit" name="Enviar">

    </form>
@endsection