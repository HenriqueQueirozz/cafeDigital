<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Café Digital</title>
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <!-- Div de todo o conteúdo -->
        <div class="main">
            <!-- Primeira tela: Cadastro -->
            <div class="content main-section-cadastro">
                <div class="main-first-content">
                    <div class="main-welcome-text">
                        <h2 class="main-subtitle">Bem vindo ao</h2>
                        <h1 class="main-title">Café Digital</h2>
                    </div>
                    <figure>
                        <img src="./src/LogoCaféDigitalAzul.png" alt="Logo Azul - Café Digital" class="main-logo my-16">
                    </figure>
                    <p class="main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam </p>
                    <p class="main-description">consequat in nisl eu faucibus. Aliquam convallis, massa ac congue!</p>
                    <a href="/login" id="signin" class="main-input-link">Logue com sua conta agora mesmo!</a>
                    <p class="main-copy">©Copyright - CaféDigital 2023</p>
                </div>
                <div class="main-second-content" id="cadastro_part1">
                    <h1 class="main-title-second">Crie sua conta</h2>
                    <form action="" class="main-form">
                        <div class="main-form-input"><br>
                            <label for="id-input-Nome" class="main-label">Nome:<span class="main-form-obrigatorio">*</span></label>
                            <br><input class="main-input" type="text" id="id-input-Nome" name="input-Nome" placeholder="Example" maxlength="100">
                        </div>
                        <div class="main-form-input">
                            <label for="id-input-Email" class="main-label">E-mail:<span class="main-form-obrigatorio">*</span></label>
                            <br><input class="main-input" type="text" id="id-input-Email" name="input-Email" placeholder="example@example.com" maxlength="50">
                        </div>
                        <div class="main-form-aside">
                            <div class="main-form-input">
                                <label for="id-input-Data" class="main-label">Data de Nascimento:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input" type="text" id="id-input-Data" name="input-Data" placeholder="00/00/0000" maxlength="8">
                            </div>
                            <div class="main-form-input aside">
                                <label for="id-input-Sexo" class="main-label">Sexo:<span class="main-form-obrigatorio">*</span></label>
                                <br><select class="main-input main-input-sexo" id="id-input-Sexo" name="input-Sexo">
                                    <option value=""></option>
                                    <option value="masc">Masculino</option>z
                                    <option value="masc">Feminino</option>
                                    <option value="others">Outros</option>
                                </select>
                            </div>
                        </div>
                        <div class="main-form-input">
                            <label for="id-input-Cpf" class="main-label">Documento CPF:<span class="main-form-obrigatorio">*</span></label>
                            <br><input class="main-input" type="text" id="id-input-Cpf" name="input-Cpf" placeholder="000.000.000-00" maxlength="11">
                        </div>
                        <button class="btn main-btn w-100 h-16 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="button" onclick="Enviar();" id="main-enviarCadastro">Enviar</button>
                        <h2 class="main-desc-cadastro">Já tem uma conta? <a href="/login" class="main-input-link">Clique aqui para Logar</a></h2>
                    </form>
                </div>
                <div class="main-second-content inactive" id="cadastro_part2">
                    <h1 class="main-title-second">Continuar cadastro</h2>
                    <form action="" class="main-form">
                        <div class="main-form-input"><br>
                            <label for="id-input-Rg" class="main-label">Registro Geral:<span class="main-form-obrigatorio">*</span></label>
                            <br><input class="main-input" type="text" id="id-input-Rg" name="input-Rg" placeholder="00.000.000-00" maxlength="10">
                        </div>
                        <div class="main-form-aside">
                            <div class="main-form-input">
                                <label for="id-input-Cpe" class="main-label">CPE:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input" type="text" id="id-input-Cpe" name="input-Cpe" placeholder="00000-000" maxlength="8">
                            </div>
                            <div class="main-form-input aside">
                                <label for="id-input-Bairro" class="main-label">Bairro:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input" type="text" id="id-input-Bairro" name="input-Bairro" placeholder="Exemplo II" maxlength="20">
                            </div>
                        </div>
                        <div class="main-form-aside">
                            <div class="main-form-input">
                                <label for="id-input-Log" class="main-label">Logradouro:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input" type="text" id="id-input-Log" name="input-Log" placeholder="Rua: Example II" max="80">
                            </div>
                            <div class="main-form-input aside">
                                <label for="id-input-Num" class="main-label">Número:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input" type="number" id="id-input-Num" name="input-Num" placeholder="000" maxlength="10">
                            </div>
                        </div>
                        <div class="main-form-input">
                            <label for="id-input-Comp" class="main-label">Complemento:</label>
                            <br><input class="main-input" type="text" id="id-input-Comp" name="input-Comp" placeholder="Casa / Apartamento" maxlength="20">
                        </div>
                        <button class="btn main-btn btn main-btn w-100 h-16 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="button" onclick="Continuar()" id="main-continuarCadastro">Continuar</button>
                    </form>
                </div>
                <div class="main-second-content inactive" id="cadastro_part3">
                    <h1 class="main-title-second">Continuar Cadastro</h1>
                    <h2 class="main-subtitle-second">Falta só mais essas informações</h2>
                    <form action="" class="main-form">
                        <div class="main-form-aside">
                            <div class="main-form-input"><br>
                                <label for="id-input-Tel" class="main-label">Telefone:</label>
                                <br><input class="main-input" type="text" id="id-input-Tel" name="input-Tel" placeholder="(00)0000-0000" maxlength="13">
                            </div>
                            <div class="main-form-input aside"><br>
                                <label for="id-input-Cel" class="main-label">Celular:<span class="main-form-obrigatorio">*</span></label>
                                <br><input class="main-input" type="text" id="id-input-Cel" name="input-Cel" placeholder="(00)00000-0000" maxlength="13">
                            </div>
                        </div>
                        <div class="main-form-input">
                            <label for="id-input-Senha" class="main-label">Senha de acesso:<span class="main-form-obrigatorio">*</span></label>
                            <input class="main-input" type="password" id="id-input-Senha" name="input-Senha" placeholder="Sua senha aqui" maxlength="15">
                        </div>
                        <div class="main-form-input">
                            <label for="id-input-ConfirmeSenha" class="main-label">Confirme a senha:<span class="main-form-obrigatorio">*</span></label>
                            <input class="main-input" type="password" id="id-input-ConfirmeSenha" name="input-ConfirmeSenha" placeholder="Confirme sua senha" maxlength="15">
                        </div>
                        <div class="main-form-input mb-1 mt-0-75">
                            <input type="checkbox" name="input-Termos-Condicoes" id="id-input-Termos-Condicoes">
                            <label for="id-input-Termos-Condicoes">Aceito os <b>Termos & Condições de uso</b></label>
                        </div>
                        <button class="btn main-btn btn main-btn w-100 h-16 rounded-lg pr-20 pl-20 text-mainInputColor bg-red-600" type="button" onclick="Finalizar()" id="main-finalizarCadastro" style="height: 75px;">Finalizar</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="./js/script.js"></script>
        <script type="text/javascript">
            $("#id-input-Cpf").mask("000.000.000-00");
            $("#id-input-Rg").mask("00.000.000-00");
            $("#id-input-Tel").mask("(00)0000-0000");
            $("#id-input-Cel").mask("(00)00000-0000");
            $("#id-input-Data").mask("00/00/0000");
            $("#id-input-Cpe").mask("00000-000");
        </script>
    </body>
</html>