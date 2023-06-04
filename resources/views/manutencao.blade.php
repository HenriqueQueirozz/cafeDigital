<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Manutenção</title>

        <!-- Fonts -->     
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div id="manutencao">
            <h1>Em manutenção!</h1><br>
            <h4>Agradecemos o interesse em nosso site, porém no momento,<br> esta funcionalidade está em desenvolvimento.</h4>
        </div>
    </body>
</html>
