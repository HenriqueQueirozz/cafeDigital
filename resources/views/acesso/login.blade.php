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
            <!-- Segunda tela: Login -->
            <div class="content">
                <div class="main-session bg-mainBodyColorAlt opacity-95">
                    <div class="main-content second-session">
                        <h1 class="main-title-second mt-14 xl:mt-28">Entre em sua conta!</h2>

                        @if($mensagem = Session::get('erro'))
                            <div class="flex justify-center" id="message-div" style="display: block">
                                <h3 class="text-2xl text-mainInputColor fixed top-5 right-28 pointer z-10" onclick="RemoverMensagem()">x</h3>
                                <div class="message">
                                    {{ $mensagem }} <br>
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

                        <form method="POST" action="{{ route('authenticacao') }}" class="main-form">
                            @csrf
                            <div class="switch_container">
                                <label for="switch-flat" class="switch_text">Entrar com o E-mail?</label>
                                <input id="switch-flat" class="switch switch--flat" type="checkbox"/>
                                <label for="switch-flat"></label>
                            </div>
                            <div class="main-form-input" id="div-id">
                                <label for="id-input-Id" class="main-label label-light">ID:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input input-light" type="number" id="id-input-Id" name="input-Id">
                            </div>
                            <div class="main-form-input" id="div-email" style="display: none;">
                                <label for="id-input-Email" class="main-label label-light">E-mail:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input input-light" type="text" id="id-input-Email" name="input-Email">
                            </div>                              
                            <div class="main-form-input password">
                                <label for="id-input-Pass" class="main-label label-light">Senha:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input input-light" type="password" id="id-input-Pass" name="input-Pass">
                                <h2 class="main-desc-cadastro"><a href="#" class="text-primary-200 m-2 hover:text-primary-400 password" onclick="abrirDialog('EsqueciSenha');">Esqueceu a senha?</a></h2>
                            </div>
                            <button class="btn-vermelho main-btn w-100 h-12 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="submit">Entrar</button>
                            <h2 class="main-desc-cadastro">Não tem uma conta? <a href="{{ route('cadastro') }}" class="main-input-link text-primary-200 m-2 hover:text-primary-400">Cadastre-se!</a></h2>
                        </form>
                    </div>
                </div>

                <div class="main-session bg-containerColor opacity-95">
                    <div class="main-content first-session">
                        <div class="main-welcome-text">
                            <h2 class="main-subtitle text-base mt-14 xl:mt-28">Bem vindo de volta!</h2>
                            <h1 class="text-4xl main-title">Café Digital</h2>
                        </div>
                        <figure>
                            <img src="../src/LogoCaféDigitalAzul.png" alt="Logo Azul - Café Digital" class="main-logo my-14">
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
                        <button class="w-100 h-12 rounded-lg pr-20 pl-20 text-mainInputColor bg-primary-400" type="submit">Pesquisar</button>
                    </div>
            </dialog>
        </div>
        @include('configuracoes_script')
        <script src="../js/login.js"></script>
    </body>
</html>