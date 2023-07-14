<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Café Digital</title>
        @include('configuracoes_head')
        <link rel="stylesheet" href="../css/acesso.css"> 
    </head>
    <body>
        <!-- Div de todo o conteúdo -->
        <div id="main">
            <!-- Primeira tela: Cadastro -->
            <div class="content">
                <div class="main-session bg-containerColor opacity-95">
                    <div class="main-content first-session">
                        <div class="main-welcome-text">
                            <h2 class="main-subtitle mt-14 2xl:mt-28">Bem vindo ao</h2>
                            <h1 class="main-title text-4xl">Café Digital</h2>
                        </div>
                        <figure>
                            <img src="../src/LogoCaféDigitalAzul.png" alt="Logo Azul - Café Digital" class="main-logo my-16">
                        </figure>
                        <p class="main-description text-base lg:text-sm 2xl:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam </p>
                        <p class="main-description text-base lg:text-sm 2xl:text-base">consequat in nisl eu faucibus. Aliquam convallis, massa ac congue!</p>
                        <a href="{{ route('login') }}" id="signin" class="main-input-link text-base lg:text-sm hover:bg-primary-200 hover:p-2 hover:rounded-lg">Logue com sua conta agora mesmo!</a>
                        <p class="main-copy">©Copyright - CaféDigital 2023</p>
                    </div>
                </div>
                <div class="main-session bg-mainBodyColorAlt opacity-95">
                    <div class="main-content second-session">
                        <h1 class="main-title-second mt-14 2xl:mt-28">Crie sua conta</h2>
                        @if($mensagem = Session::get('erro'))
                            <div class="flex justify-center mt-10"> 
                                <div class="w-96 bg-red-300 py-3 rounded-md">
                                    {{ $mensagem }}
                                </div>
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="flex justify-center" id="message-div" style="display: block">
                                <h3 class="text-2xl text-mainInputColor fixed top-5 right-28 pointer z-10" onclick="RemoverMensagem()">x</h3>
                                <div class="message">
                                    @foreach($errors->all() as $error)
                                            {{ $error }} <br>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}" class="main-form">
                            @csrf
                            <div class="main-form-input"><br>
                                <label for="id-input-Nome" class="main-label label-light">Nome:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input input-light" type="text" id="id-input-Nome" name="input-Nome" placeholder="Examplo" maxlength="100">
                            </div>
                            <div class="main-form-input">
                                <label for="id-input-Email" class="main-label label-light">E-mail:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input input-light" type="text" id="id-input-Email" name="input-Email" placeholder="examplo@examplo.com" maxlength="50">
                            </div>
                            <div class="main-form-input">
                                <label for="id-input-Senha" class="main-label label-light">Senha de acesso:<span class="main-form-obrigatorio">*</span></label>
                                <input class="main-input input-light" type="password" id="id-input-Senha" name="input-Senha" placeholder="Sua senha aqui" minlength="8" maxlength="15" required onchange="validarSenha();">
                            </div>
                            <div class="main-form-input">
                                <label for="id-input-ConfirmeSenha" class="main-label label-light">Confirme a senha:<span class="main-form-obrigatorio">*</span></label>
                                <input class="main-input input-light" type="password" id="id-input-ConfirmeSenha" name="input-ConfirmeSenha" placeholder="Confirme sua senha" minlength="8" maxlength="15" required onchange="validarSenha();">
                            </div>
                            <button class="btn-vermelho main-btn w-100 h-12 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="submit" id="enviar" onsubmit="notify()">Enviar</button>
                            <h2 class="main-desc-cadastro text-base lg:text-sm">Já tem uma conta? <a href="/login" class="main-input-link hover:text-primary-400">Clique aqui para Logar</a></h2>
                            <div class="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('configuracoes_script')
        <script src="../js/login.js}"></script>
    </body>
</html>