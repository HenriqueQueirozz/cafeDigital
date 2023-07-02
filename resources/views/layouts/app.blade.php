<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        @include('configuracoes_head')
    </head>
    <body>
        <!-- <ul>
            <li class="text-3xl font-bold underline"><a href="/app/conteudos">Conteúdos</a></li>
            <li><a href="/app/cadastro-associado">Cadastro de associados</a></li>
            <li><a href="/app/mapa-associados">Mapa de associados</a></li>
            <li><a href="/app/historico-pagamento">Histórico de pagamentos</a></li>
        </ul> -->
        <a href="{{ route('logout') }}">Sair</a>
        @yield('content')
        @include('configuracoes_script')
    </body>
</html>