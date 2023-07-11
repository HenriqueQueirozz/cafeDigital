<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"><!-- Local -->
        <!-- <link rel="stylesheet" href="./css/app.css"> Produção -->
        @include('configuracoes_head')
    </head>
    <body class="truncate"><!-- POSSIVELMENTE VAI DAR PROBLEMA -->
        <nav class="flex justify-between bg-primary-400 w-100 h-16">
            <div class="p-5">
                <label class="hamburger-menu m-3">
                    <input type="checkbox" id="app-input-menu" onclick="MudarEstadoNav('app-menu-conteudo')"/>
                </label>
            </div>
        </nav>
        <div class="flex">
            <img src="src/perfil/{{ $dados_usuario['nomeFoto_fp'] }}" onclick="MudarEstadoImagem('app-modal-opcoes')" class="fixed top-0 left-100 right-0 m-5 w-20 border-solid border-4 rounded-full border-secondary-500 cursor-pointer" id="perfilImagem">
            <div id="app-modal-opcoes" class="w-64 fixed top-24 left-100 right-0 m-5 bg-secondary-0 rounded-lg z-10" style="display: none">
                <div class="flex flex-col">
                    <div id="upload-image" class="flex flex-col upload-image m-auto mt-5" style="display: none;">
                      <form method="POST" action="{{ route('v1.salvar_avatar') }}" enctype="multipart/form-data">
                        @csrf
                        <label class="picture" for="picture__input" tabIndex="0">
                            <span class="picture__image"></span>
                        </label>
                        <input type="file" name="picture__input" id="picture__input" onclick="ExibirSalvar();" required>
                        <button id="upload-image-salvar" type="submit" style="display: none;" class="pl-2 pr-2 2xl:text-lg">Salvar</button>
                      </form>
                    </div>
                    <div class="flex border-b-2 border-mainInputColor">
                        <a href="#" class="app-modal" onclick="MudarEstadoUpload('upload-image')"><p>Alterar foto do perfil</p></a>
                        <i class="app-icon text-base bi bi-image-fill"></i>
                    </div>
                </div>
                <div class="flex border-b-2 border-mainInputColor">
                    <a href="{{ route('app.home') }}?editar" class="app-modal"><p>Editar dados do cadastro</p></a>
                    <i class="app-icon text-base bi bi-pencil"></i>
                </div>
                <div class="flex hover:text-secondary-200">
                    <a href="{{ route('logout') }}"><p class="font-normal p-3">Sair</p></a>
                    <i class="app-icon text-base bi bi-box-arrow-left"></i>
                </div>
            </div>
        </div>
        <div class="flex">
            <div id="app-menu-conteudo" class="app-menu bg-primary-300 w-60" style="height: 100vh">
                <ul class="lg:w-30 text-mainInputColor text-base flex flex-col text-center">
                    <li class="app-item mt-12 md:text-xs meu-perfil">
                        <a href="{{ route('app.home') }}"><i class="app-icon bi bi-person-circle"></i></a><br>
                        Meu Perfil
                    </li>
                    <li class="app-item md:text-xs associados">
                        <a href="{{ route('app.associados') }}"><i class="app-icon bi bi-diagram-3-fill"></i></a><br>
                        Associados
                    </li>
                    <li class="app-item md:text-xs conteudos">
                        <a href="{{ route('app.conteudos') }}"><i class="app-icon bi bi-archive"></i></i></a><br>
                        Conteudos
                    </li>
                    <li class="app-item md:text-xs financeiro">
                        <a href="{{ route('app.historico-pagamento') }}"><i class="app-icon bi bi-handbag"></i></a><br>
                        Financeiro
                    </li>
                    <div class="fixed bottom-0">
                        <li class="app-item md:text-xs justify-items-center text-center">
                            <i class="app-icon bi bi-chat-dots text-base ml-8"></i>
                            <a href="https://api.whatsapp.com/send/?phone=5514998598589&text=Ol%C3%A1%21+Cheguei+atrav%C3%A9s+do+site.+Pode+me+ajudar%3F&type=phone_number&app_absent=0" class="md:text-xs">Entre em contato</a>
                        </li>
                        <li class="app-item justify-items-center text-center ml-8 hover:text-secondary-200">
                            <a href="{{ route('logout') }}" class="md:text-xs"><i class="app-icon bi bi-box-arrow-left text-base"></i>Sair</a>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="app-content mt-auto mb-auto">
                @yield('content')
            </div>
        </div>
        @include('configuracoes_script')
    </body>
</html>