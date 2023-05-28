<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>@yield('title')</title>

        <!-- Fonts -->
    </head>
    <body>
        <ul>
            <li class="text-3xl font-bold underline"><a href="/app/conteudos">Conteúdos</a></li>
            <li><a href="/app/cadastro-associado">Cadastro de associados</a></li>
            <li><a href="/app/mapa-associados">Mapa de associados</a></li>
            <li><a href="/app/historico-pagamento">Histórico de pagamentos</a></li>
        </ul>
        @yield('content')
    </body>
</html>