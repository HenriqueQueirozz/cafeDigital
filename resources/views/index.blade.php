<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Café Digital</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/bootstrap.css">
        <link rel="stylesheet" href="./css/landing.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://cdn.tailwindcss.com"></script>
        @vite('resources/css/app.css')
    </head>
    <body class="font-body">
        <header id="landing-header">
            <nav id="navegation-bar" class=" fixed w-full">
                    <ul>
                        <li><a class="header-logo highlight-option" href="/" title="Café Digital">Café digital</a></li>
                        <li><a href="#planos" title="Planos">Planos</a></li>
                        <li><a href="#funcionamento" title="Funcionamento">Funcionamento</a></li>
                    </ul>
                    <picture>
                        <img src="./src/IconeCafeDigital.png" alt="Uma xícara de café">
                    </picture>
                    <ul>
                        <li><a href="#sobre" title="Sobre">Sobre</a></li>
                        <li><a class="highlight-option transition delay-150 duration-300 ease-in-out" href="/cadastro" title="Cadastrar-se">Cadastrar-se</a></li>
                        <li><a href="/login"><button class="btn w-100 h-8 rounded-lg pr-10 pl-10 text-mainInputColor bg-secondary-400 hover:bg-primary-200 transition-all" title="Conectar-se">Conectar-se</button></a></li>
                    </ul>
            </nav>
        </header>
        <main id="landing-main">
            <section id="chamada">
                <div class="mt-8">
                    <div class="chamada-info">
                        <div>
                            <h1 class="text-4xl font-bold">Lorem Ipsum</h1>
                            <h2 class="text-3x1 font-bold">consectetur adipiscing elit</h2>
                            <p class="chamada-text text-lg text-justify leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet, lectus ac dictum bibendum, orci lacus sagittis ante, vitae tristique massa orci venenatis ligula.</p>
                        </div>
                    </div>
                    <div class="chamada-image">
                        <img src="./src/undraw_newspaper.svg" alt="" width="70%">
                    </div>
                </div>
            </section>
            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1439 124">
                <title>Novo Projeto</title>
                <style>
                    .s0 { fill: #B3D1FF } 
                </style>
                <path id="Forma 1" class="s0" d="m0-144h1441v211c0 0-419-127.4-715-1-296 126.4-726 1-726 1z"/>
                <path id="Forma 2" class="s0" d="m1074 277"/>
            </svg>
            <section id="informacoes">
                <h2 class="informacoes-subtitle section-subtitle">consectetur adipiscing elit</h2>
                <h1 class="informacoes-title section-title mb-5 text-2xl font-bold">Lorem Ipsum</h1>

                <ul class="informacoes-benefits">
                    <li>
                        <p>+50</p>
                        <p>Salas privadas</p>
                    </li>
                    <li>
                        <p>+100</p>
                        <p>Lugares para evento</p>
                    </li>
                    <li>
                        <p>+15</p>
                        <p>Estudios criativos</p>
                    </li>
                </ul>
                <p class="informacoes-text my-2 text-base xl:leading-loose text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet, lectus ac dictum bibendum, orci lacus sagittis ante, vitae tristique massa orci venenatis ligula. Aliquam aliquet, lectus ac dictum bibendum, orci lacus sagittis ante, vitae tristique massa orci venenatis ligula. In nibh eros, dignissim et velit eu, dignissim convallis dolor.</p>
                <a href="#planos">Conheça nossos planos<i class="bi bi-caret-right-fill"></i></a>
            </section>
            <section id="secao2" class="mb-40">
                <div class="vantagem secao2-direction-end">
                    <div class="imagem-vantagem">
                        <img src="./src/Vector.png" alt="">
                    </div>
                    <div>
                        <h3>consectetur adipiscing elit</h3>
                        <div class="secao2-title ms-auto mt-1 mb-2">
                            <h2>#Lorem Ipsum</h2>
                            <hr class="secao2-line">
                        </div>
                        <p class="secao2-text text-base xl:leading-loose text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet, lectus ac dictum bibendum, orci lacus sagittis ante, vitae tristique massa orci venenatis ligula.</p>
                    </div>
                </div>
                <div class="vantagem secao2-direction-start">
                    <div class="imagem-vantagem">
                        <img src="./src/Group 4.png" alt="">
                    </div>
                    <div>
                        <h3>consectetur adipiscing elit</h3>
                        <div class="secao2-title mt-1 mb-2">
                            <h2>#Lorem Ipsum</h2>
                            <hr class="secao2-line">
                        </div>
                        <p class="secao2-text text-base xl:leading-loose text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet, lectus ac dictum bibendum, orci lacus sagittis ante, vitae tristique massa orci venenatis ligula.</p>
                        <ul>
                            <li>Aenean molestie convallis nisi</li>
                            <li>Non ultricies augue porta cursus</li>
                        </ul>
                    </div>
                </div>
                <div class="vantagem secao2-direction-end">
                    <div class="imagem-vantagem">
                        <img src="./src/Calendar2Week.png" alt="">
                    </div>
                    <div class="secao2-direction-end">
                        <h3>consectetur adipiscing elit</h3>
                        <div class="secao2-title ms-auto mt-1 mb-2">
                            <h2>#Lorem Ipsum</h2>
                            <hr class="secao2-line">
                        </div>
                        <p class="secao2-text text-base xl:leading-loose text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet, lectus ac dictum <b>bibendum, orci lacus sagittis</b> ante, vitae tristique massa orci venenatis ligula.</p>
                    </div>
                </div>
                <a href="#" class="text-base font-bold">Converse com nossos especialistas agora mesmo<i class="bi bi-caret-right-fill"></i></a>
            </section>
            <section id="planos" class="mb-40">
                <h1 class="planos-title section-title text-2xl font-bold">Conheça nossos Planos!</h1>
                <h2 class="planos-subtitle section-subtitle mb-5">consectetur adipiscing elit</h2>

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
                        <button class="btn w-100 h-8 rounded-lg pr-10 pl-10 text-mainInputColor bg-secondary-400">Contratar</button>
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
                        <button class="btn w-100 h-8 rounded-lg pr-10 pl-10 text-mainInputColor bg-secondary-400">Contratar</button>
                    </div>
                </div>
            </section>
            <section id="sobre" class="mb-40">
                <h2 class="sobre-subtitle section-subtitle">consectetur adipiscing elit</h2>
                <h1 class="sobre-title section-title mb-5 text-2xl font-bold">Lorem Ipsum</h1>

                <div>
                    <div class="sobre-image">
                        <img src="./src/undraw_completed.svg" alt="">
                    </div>
                    <div>
                        <p class="sobre-text text-xl xl:leading-loose text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut bibendum dolor, a tincidunt nunc. Nunc eleifend orci vel tempus dictum. Integer tincidunt sapien quam, in <b>vehicula quam vehicula sit amet. Suspendisse</b> vehicula erat arcu, id facilisis mauris vulputate eu. Maecenas mollis quis arcu hendrerit vulputate. Ut a commodo enim. Proin;<br><br>
                            Aenean bibendum velit eu tempus tincidunt. Vivamus luctus, est non luctus posuere, justo felis luctus nisl, vel mattis elit eros eget libero. <b>Proin semper, purus eget malesuada varius, nulla lectus</b> molestie neque, at varius risus elit id nisi. Donec congue volutpat laoreet. Morbi sit amet eros eget enim semper sollicitudin quis ut augue.
                        </p>
                    </div>
                </div>
                
            </section>
            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1439 124" class="origin-center rotate-180">
                <title>Novo Projeto</title>
                <style>
                    .s0 { fill: #B3D1FF } 
                </style>
                <path id="Forma 1" class="s0" d="m0-144h1441v211c0 0-419-127.4-715-1-296 126.4-726 1-726 1z"/>
                <path id="Forma 2" class="s0" d="m1074 277"/>
            </svg>
            <section id="contato">
                <h2 class="contato-title text-3xl font-bold">Seja informado sobre as novidades!</h2>

                <div class="form-group">
                    <label for="">Nome para contato:</label>
                    <input class="contato-input text-base" type="text" name="" id="" placeholder="Seu nome aqui!">
                </div>
                <div class="form-group">
                    <label for="">E-mail:</label>
                    <input class="contato-input text-base" type="text" name="" id="" placeholder="example@exemple.com">
                </div>
                <div class="contato-box">
                    <div class="form-group">
                        <label for="">Tenho interesse em:</label>
                        <input class="contato-input text-base" type="text" name="" id="" placeholder="Sou programador!">
                    </div>
                    <button class="btn-vermelho">Cadastrar Contato</button>
                </div>
            </section>
        </main>
        <footer id="landing-footer">
            <div>
                <div class="footer-box">
                    <div class="rounded-full bg-mainInputColor p-1.5 px-3 items-center hover:text-primary-200 cursor-pointer"><i class="bi bi-twitter"></i></div>
                    <div class="rounded-full bg-mainInputColor p-1.5 px-3 items-center hover:text-primary-200 cursor-pointer"><i class="bi bi-facebook"></i></div>
                    <div class="rounded-full bg-mainInputColor p-1.5 px-3 items-center hover:text-primary-200 cursor-pointer"><i class="bi bi-instagram"></i></div>
                </div>
                <div class="my-1">
                    <div class="footer-box mb-1">
                        <p class="text-base">Informações</p>
                        <p class="text-base	">Suporte</p>
                        <p class="text-base	">Entre em contato</p>
                    </div>
                    <div class="footer-box">
                        <p class="text-sm">Termos de uso e condições de uso</p>
                    </div>
                </div>

                <p class="copyright">©Copyright - CaféDigital 2023</p>
            </div>
        </footer>
        <script src="./js/requisicoes.js"></script>
    </body>
</html>