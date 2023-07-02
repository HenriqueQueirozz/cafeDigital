<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/app.css">
        @include('configuracoes_head')
    </head>
    <body class="truncate"><!-- POSSIVELMENTE VAI DAR PROBLEMA -->
        <nav class="flex justify-between bg-primary-400 w-100 h-16">
            <div class="p-5">
                <div>
                    <svg width="35" height="35" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg" class="">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 27.3438C4.375 27.0537 4.49023 26.7755 4.69535 26.5704C4.90047 26.3652 5.17867 26.25 5.46875 26.25H29.5312C29.8213 26.25 30.0995 26.3652 30.3046 26.5704C30.5098 26.7755 30.625 27.0537 30.625 27.3438C30.625 27.6338 30.5098 27.912 30.3046 28.1171C30.0995 28.3223 29.8213 28.4375 29.5312 28.4375H5.46875C5.17867 28.4375 4.90047 28.3223 4.69535 28.1171C4.49023 27.912 4.375 27.6338 4.375 27.3438ZM4.375 20.7812C4.375 20.4912 4.49023 20.213 4.69535 20.0079C4.90047 19.8027 5.17867 19.6875 5.46875 19.6875H29.5312C29.8213 19.6875 30.0995 19.8027 30.3046 20.0079C30.5098 20.213 30.625 20.4912 30.625 20.7812C30.625 21.0713 30.5098 21.3495 30.3046 21.5546C30.0995 21.7598 29.8213 21.875 29.5312 21.875H5.46875C5.17867 21.875 4.90047 21.7598 4.69535 21.5546C4.49023 21.3495 4.375 21.0713 4.375 20.7812ZM4.375 14.2188C4.375 13.9287 4.49023 13.6505 4.69535 13.4454C4.90047 13.2402 5.17867 13.125 5.46875 13.125H29.5312C29.8213 13.125 30.0995 13.2402 30.3046 13.4454C30.5098 13.6505 30.625 13.9287 30.625 14.2188C30.625 14.5088 30.5098 14.787 30.3046 14.9921C30.0995 15.1973 29.8213 15.3125 29.5312 15.3125H5.46875C5.17867 15.3125 4.90047 15.1973 4.69535 14.9921C4.49023 14.787 4.375 14.5088 4.375 14.2188ZM4.375 7.65625C4.375 7.36617 4.49023 7.08797 4.69535 6.88285C4.90047 6.67773 5.17867 6.5625 5.46875 6.5625H29.5312C29.8213 6.5625 30.0995 6.67773 30.3046 6.88285C30.5098 7.08797 30.625 7.36617 30.625 7.65625C30.625 7.94633 30.5098 8.22453 30.3046 8.42965C30.0995 8.63477 29.8213 8.75 29.5312 8.75H5.46875C5.17867 8.75 4.90047 8.63477 4.69535 8.42965C4.49023 8.22453 4.375 7.94633 4.375 7.65625Z" fill="white"/>
                    </svg>
                </div>
            </div>
            <div class="float-right p-5 mr-28 text-2xl">
                <i class="bi bi-arrow-left text-white hover:text-primary-200"></i>
                <i class="bi bi-arrow-right text-white ml-2 hover:text-primary-200"></i>   
            </div>
        </nav>
        <img src="src/PerfilAuto.png" class="fixed top-0 left-100 right-0 m-5 w-20 border-solid border-4	rounded-full border-primary-600">
        <ul class="app-menu w-60 h-full bg-primary-400 text-mainInputColor text-base flex flex-col text-center">
            <li class="app-item mt-12">
                <i class="app-icon bi bi-person-circle"></i><br>
                Meu Perfil
            </li>
            <li class="app-item">
                <i class="app-icon bi bi-diagram-3-fill"></i><br>
                Associados
            </li>
            <li class="app-item">
                <i class="app-icon bi bi-handbag"></i><br>
                Financeiro
            </li>
            <div class="fixed bottom-0">
                <li class="app-item">
                    <i class="app-icon bi bi-chat-dots"></i>
                    <a href="#">Entre em contato</a>
                </li>
                <li class="app-item">
                    <a href="{{ route('logout') }}"><i class="app-icon bi bi-box-arrow-left"></i>Sair</a>
                </li>
            </div>
        </ul>
        @yield('content')
        @include('configuracoes_script')
    </body>
</html>