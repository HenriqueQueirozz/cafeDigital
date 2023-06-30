<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        @include('configuracoes_head')
    </head>
    <body>
        <div id="main">
            <div class="container-cadastro">
                <div class="bg-mainBodyColorAlt flex flex-col p-8">
                    <h1 class="planos-title section-title text-2xl font-bold">@yield('etapa')</h1>
                    <h2 class="planos-subtitle section-subtitle text-light-0">@yield('descricao')</h2>
                </div>
                <div id="conteudo-etapa" class="bg-primary-200">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('configuracoes_script')
    </body>
</html>