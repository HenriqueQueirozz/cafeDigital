<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Café Digital</title>
        @include('configuracoes_head')
    </head>
    <body>
        <!-- Div de todo o conteúdo -->
        <div id="main">
            <!-- Primeira tela: Cadastro -->
            <div class="content main-section-cadastro">
                <div class="main-first-content">
                    <div class="main-welcome-text">
                        <h2 class="main-subtitle">Bem vindo ao</h2>
                        <h1 class="main-title text-4xl">Café Digital</h2>
                    </div>
                    <figure>
                        <img src="./src/LogoCaféDigitalAzul.png" alt="Logo Azul - Café Digital" class="main-logo my-16">
                    </figure>
                    <p class="main-description text-base lg:text-sm 2xl:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam </p>
                    <p class="main-description text-base lg:text-sm 2xl:text-base">consequat in nisl eu faucibus. Aliquam convallis, massa ac congue!</p>
                    <a href="/login" id="signin" class="main-input-link text-base lg:text-sm hover:bg-primary-200 hover:p-2 hover:rounded-lg mt-5">Logue com sua conta agora mesmo!</a>
                    <p class="main-copy">©Copyright - CaféDigital 2023</p>
                </div>

                <div class="main-second-content">
                    @if($mensagem = Session::get('erro'))
                        {{ $mensagem }}
                    @endif
                    <h1 class="main-title-second mt-6">Crie sua conta</h2>
                    <form method="POST" action="{{ route('register') }}" class="main-form">
                        @csrf
                        
                        <div class="main-form-input"><br>
                            <label for="id-input-Nome" class="main-label">Nome:<span class="main-form-obrigatorio">*</span></label>
                            <br><input class="main-input" type="text" id="id-input-Nome" name="input-Nome" placeholder="Example" maxlength="100">
                        </div>
                        <div class="main-form-input">
                            <label for="id-input-Email" class="main-label">E-mail:<span class="main-form-obrigatorio">*</span></label>
                            <br><input class="main-input" type="text" id="id-input-Email" name="input-Email" placeholder="example@example.com" maxlength="50">
                        </div>

                        <div class="main-form-input">
                            <label for="id-input-Senha" class="main-label">Senha de acesso:<span class="main-form-obrigatorio">*</span></label>
                            <input class="main-input" type="password" id="id-input-Senha" name="input-Senha" placeholder="Sua senha aqui" maxlength="15">
                        </div>
                        <div class="main-form-input">
                            <label for="id-input-ConfirmeSenha" class="main-label">Confirme a senha:<span class="main-form-obrigatorio">*</span></label>
                            <input class="main-input" type="password" id="id-input-ConfirmeSenha" name="input-ConfirmeSenha" placeholder="Confirme sua senha" maxlength="15">
                        </div>

                        <button class="btn main-btn w-100 h-14 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="submit" id="main-enviarCadastro">Enviar</button>
                        <h2 class="main-desc-cadastro text-base lg:text-sm">Já tem uma conta? <a href="/login" class="main-input-link hover:text-primary-400">Clique aqui para Logar</a></h2>
                    </form>
                </div>
            </div>
        </div>
        @include('configuracoes_script')
    </body>
</html>