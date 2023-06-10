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
                        <img src="./src/LogoCaféDigitalAzul.png" alt="Logo Azul - Café Digital" class="main-logo">
                    </figure>
                    <p class="main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam </p>
                    <p class="main-description">consequat in nisl eu faucibus. Aliquam convallis, massa ac congue!</p>
                    <a href="/login" id="signin" class="main-input-link">Logue com sua conta agora mesmo!</a>
                    <p class="main-copy">©Copyright - CaféDigital 2023</p>
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