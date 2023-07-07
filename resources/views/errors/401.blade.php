@extends('layouts.erros')
<<<<<<< HEAD
<div class='c'>
    <div class='_erro'>401</div>
    <hr>
    <div class='_1'>ESSE ACESSO</div>
    <div class='_2'>NÃO FOI AUTORIZADO</div>
    <a class='btn' href='#'>VOLTAR PARA HOME</a>
</div>
=======
@section('content')
    <div class='c'>
        <div class='_erro'>401</div>
        <hr>
        <div class='_1'>ESSE ACESSO</div>
        <div class='_2'>NÃO FOI AUTORIZADO</div>
        <a class='btn' href="{{ route('app.home') }}">VOLTAR PARA HOME</a>
    </div>
@endsection
>>>>>>> 8db9378264947f08f31bc86a2e078d636f1119f0
