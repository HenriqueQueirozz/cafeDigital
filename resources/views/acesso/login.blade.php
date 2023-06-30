<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Café Digital</title>
        @include('configuracoes_head')
    </head>
    <body>
        <!-- Div de todo o conteúdo -->
        <div id="main">
            <!-- Segunda tela: Login -->
            <div class="content-login main-section-cadastro">
                <div class="main-second-content bg-mainBodyColorAlt opacity-95" style="border-radius: 5% 0% 0% 5%;">
                    <div class="main-content" style="width: 100%; text-align: center;">
                        <h1 class="main-title-second">Entre em sua conta!</h2>
                        <form method="POST" action="{{ route('authenticacao') }}" class="main-form">
                            @csrf
                            
                            <div class="switch_container">
                                <label for="switch-flat" class="switch_text">Entrar com o E-mail?</label>
                                <input id="switch-flat" class="switch switch--flat" type="checkbox"/>
                                <label for="switch-flat"></label>
                            </div>
                            
                            <div class="main-form-input" id="div-id">
                                <label for="id-input-Id" class="main-label">ID:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input" type="number" id="id-input-Id" name="input-Id">
                            </div>
                              
                            <div class="main-form-input" id="div-email" style="display: none;">
                                <label for="id-input-Email" class="main-label">E-mail:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input" type="text" id="id-input-Email" name="input-Email">
                            </div>                              
                            
                            <div class="main-form-input password">
                                <label for="id-input-Pass" class="main-label">Senha:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input" type="password" id="id-input-Pass" name="input-Pass">
                                <h2 class="main-desc-cadastro"><a href="#" class="text-primary-200 m-2 hover:text-primary-400 password" onclick="abrirDialog('EsqueciSenha');">Esqueceu a senha?</a></h2>
                            </div>
                            <button class="btn main-btn btn main-btn w-100 h-12 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="submit">Entrar</button>
                            <h2 class="main-desc-cadastro">Não tem uma conta? <a href="{{ route('cadastro') }}" class="main-input-link text-primary-200 m-2 hover:text-primary-400">Cadastre-se!</a></h2>
                        </form>
                    </div>
                </div>
                <div class="main-first-content">
                    <div class="main-content">
                        <div class="main-welcome-text">
                            <h2 class="main-subtitle text-base">Bem vindo de volta!</h2>
                            <h1 class="text-4xl main-title">Café Digital</h2>
                        </div>
                        <figure>
                            <img src="./src/LogoCaféDigitalAzul.png" alt="Logo Azul - Café Digital" class="main-logo my-14">
                        </figure>
                        <p class="main-description text-base">Lorem ipsum dolor sit amet,  adipiscing elit.</p>
                        <p class="main-description text-base mb-10">Etiam consectetur consequat in nisl eu faucibus !</p>
                        <a href="{{ route('cadastro') }}" id="signup" class="main-input-link hover:bg-primary-200 hover:p-2 hover:rounded-lg" style="margin-top: 15px;">Cadastre uma conta agora mesmo!</a>
                        <p class="main-copy">©Copyright - CaféDigital 2023</p>
                    </div>
                </div>
            </div>

            <!-- Dialog: Esqueci minha senha -->
            <dialog id="EsqueciSenha">
                <div class="head-dialog">
                    <h3>Encontre sua conta</h3>
                </div>
                <div class="main-dialog">
                    <div class="dialog-content">
                        <p>Insira seu e-mail ou número de celular para procurar a sua conta.</p>
                        <div class="form-input">
                            <input class="control-input" type="text" id="id-input-EsqueciSenha" name="input-EsqueciSenha" placeholder="Email ou número de celular">
                        </div>  
                    </div>
                </div>
                <div class="foot-dialog">
                    <button class="hover:text-secondary-400" onclick="fecharDialog('EsqueciSenha');">Cancelar</button>
                    <button class="w-100 h-12 rounded-lg pr-20 pl-20 text-mainInputColor bg-primary-400" onclick="esqueciSenha();">Pesquisar</button>
                </div>
            </dialog>
        </div>
        @include('configuracoes_script')
        <script src="./js/login.js"></script>
    </body>
</html>