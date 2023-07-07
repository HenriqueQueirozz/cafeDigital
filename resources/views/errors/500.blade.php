<<<<<<< HEAD

@extends('layouts.erros')
<div class='c'>
    <div class='_erro'>500</div>
    <hr>
    <div class='_1'>COMUNICAÇÃO ENCERRADA</div>
    <div class='_2'>ERRO INTERNO NO SERVIDOR</div>
    <a class='btn' href='#'>VOLTAR PARA HOME</a>
</div>
=======
@extends('layouts.erros')
@section('content')
    <div class='c'>
        <div class='_erro'>500</div>
        <hr>
        <div class='_1'>COMUNICAÇÃO ENCERRADA</div>
        <div class='_2'>ERRO INTERNO NO SERVIDOR</div>
        <a class='btn' href="{{ route('app.home') }}">VOLTAR PARA HOME</a>
    </div>
@endsection
>>>>>>> 8db9378264947f08f31bc86a2e078d636f1119f0
