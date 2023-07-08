<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @include('configuracoes_head')
    </head>
    <body class="truncate"><!-- POSSIVELMENTE VAI DAR PROBLEMA -->
        <nav class="flex justify-between bg-primary-400 w-100 h-16">
            <div class="p-5">
                <label class="hamburger-menu m-3">
                    <input type="checkbox" id="app-input-menu" onclick="MudarEstado('app-menu-conteudo')"/>
                </label>
            </div>
        </nav>
        <img src="src/PerfilAuto.png" class="fixed top-0 left-100 right-0 m-5 w-20 border-solid border-4	rounded-full border-primary-600">
        <div class="flex">
            <div id="app-menu-conteudo" class="app-menu bg-primary-300 w-60" style="height: 100vh">
                <ul class="lg:w-30 text-mainInputColor text-base flex flex-col text-center">
                    <li class="app-item mt-12 md:text-xs meu-perfil">
                        <i class="app-icon bi bi-person-circle"></i><br>
                        Meu Perfil
                    </li>
                    <li class="app-item md:text-xs associados">
                        <i class="app-icon bi bi-diagram-3-fill"></i><br>
                        Associados
                    </li>
                    <li class="app-item md:text-xs financeiro">
                        <i class="app-icon bi bi-handbag"></i><br>
                        Financeiro
                    </li>
                    <div class="fixed bottom-0">
                        <li class="app-item md:text-xs justify-items-center text-center">
                            <i class="app-icon bi bi-chat-dots text-base ml-8"></i>
                            <a href="https://api.whatsapp.com/send/?phone=5514996283799&text=Ol%C3%A1%21+Cheguei+atrav%C3%A9s+do+site.+Pode+me+ajudar%3F&type=phone_number&app_absent=0" class="md:text-xs">Entre em contato</a>
                        </li>
                        <li class="app-item justify-items-center text-center ml-8">
                            <a href="{{ route('logout') }}" class="md:text-xs"><i class="app-icon bi bi-box-arrow-left text-base"></i>Sair</a>
                        </li>
                    </div>
                </ul>
            </div>
            <div style="margin-left: auto; margin-right: auto;">
                @yield('content')
            </div>
        </div>
        @include('configuracoes_script')
    </body>
</html>