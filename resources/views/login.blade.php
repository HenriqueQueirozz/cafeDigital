<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Café Digital</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div id="fade"></div>
        <!-- Div de todo o conteúdo -->
        <div class="main">
            <!-- Segunda tela: Login -->
            <div class="content-login main-section-cadastro">
                <div class="main-second-content" style="border-radius: 5% 0% 0% 5%;">
                    <div class="main-content" style="width: 100%; text-align: center;">
                        <h1 class="main-title-second">Entre em sua conta!</h2>
                        <form action="" class="main-form">
                            
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
                                <h2 class="main-desc-cadastro"><a href="#" class="main-input-link password" onclick="abrirDialog('EsqueciSenha');">Esqueceu a senha?</a></h2>
                            </div>
                            
                            <button class="btn main-btn" type="submit" onclick="window.location.href='../'">Entrar</button>
                            <h2 class="main-desc-cadastro">Não tem uma conta? <a href="/cadastro" class="main-input-link">Cadastre-se!</a></h2>
                        </form>
                    </div>
                </div>
                <div class="main-first-content">
                    <div class="main-content">
                        <div class="main-welcome-text">
                            <h2 class="main-subtitle">Bem vindo de volta!</h2>
                            <h1 class="main-title">Café Digital</h2>
                        </div>
                        <figure>
                            <img src="./src/LogoCaféDigitalAzul.png" alt="Logo Azul - Café Digital" class="main-logo">
                        </figure>
                        <p class="main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam </p>
                        <p class="main-description">consequat in nisl eu faucibus. Aliquam convallis, massa ac congue!</p>
                        <a href="/cadastro" id="signup" class="main-input-link" style="margin-top: 15px;">Cadastre uma conta agora mesmo!</a>
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
                    <button class="btn-teste" onclick="fecharDialog('EsqueciSenha');">Cancelar</button>
                    <button class="btn-teste btn-search" onclick="esqueciSenha();">Pesquisar</button>
                </div>
            </dialog>

        </div>
        <script src="./js/script.js"></script>
        <script src="./js/dialog.js"></script>
    </body>
</html>