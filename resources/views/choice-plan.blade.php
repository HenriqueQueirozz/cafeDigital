<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Café Digital</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/choice-plan.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="main">
            <div class="container-planos bg-primary-200">
                <section id="planos-choice" style="width: 100;" style="padding: 0">
                    <div class="bg-mainBodyColorAlt rounded-lg flex flex-col p-8">
                        <h1 class="planos-title section-title text-2xl font-bold">Conheça nossos Planos!</h1>
                        <h2 class="planos-subtitle section-subtitle mb-5 text-light-0">consectetur adipiscing elit</h2>
                    </div>
                    <div class="py-8">
                        <div class="plano-card py-8">
                            <h2 class="text-xl font-bold">Frater</h2>
                            <p class="text-base card-subtitle">Lorem ipsum dolor sit amet</p>
                            <div class="card-body">
                                <p><i class="bi bi-check"></i>
                                    Lorem ipsum dolor sit amet lectus ac dictum</p>
                                <p><i class="bi bi-check"></i>
                                    Lorem ipsum dolor sit amet lectus ac dictum</p>
                            </div>
                            <h1 class="text-2xl">R$ 199,00 / mês</h1>
                            <button class="btn w-100 h-8 rounded-lg pr-10 pl-10 text-mainInputColor bg-secondary-400" onclick="window.location.href='../'">Contratar</button>
                        </div>
                        <div class="plano-card py-8">
                            <h2 class="text-xl font-bold">Club Owner</h2>
                            <p class="card-subtitle text-base">Lorem ipsum dolor sit amet</p>
                            <div class="card-body">
                                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus ac dictum</p>
                                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus</p>
                                <p><i class="bi bi-check"></i>Lorem ipsum dolor sit amet lectus ac dictum</p>
                            </div>
                            <h1 class="text-2xl">R$ 615,00 / mês</h1>
                            <button class="btn w-100 h-8 rounded-lg pr-10 pl-10 text-mainInputColor bg-secondary-400" onclick="window.location.href='../'">Contratar</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script src="./js/script.js"></script>
    </body>
</html>