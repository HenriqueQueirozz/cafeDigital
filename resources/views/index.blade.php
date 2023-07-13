<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Café Digital</title>
        @include('configuracoes_head')
        <link rel="stylesheet" href="./css/landing.css">
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
                        <img src="{{ asset('src/IconeCafeDigital.png') }}" alt="Uma xícara de café">
                    </picture>
                    <ul>
                        <li><a href="#sobre" title="Sobre">Sobre</a></li>
                        <li><a class="highlight-option transition delay-150 duration-300 ease-in-out" href="/cadastro" title="Cadastrar-se">Cadastrar-se</a></li>
                        <li><a href="/login"><button class="btn-vermelho w-100 h-8 rounded-lg pr-10 pl-10 text-mainInputColor bg-secondary-400" title="Conectar-se">Conectar-se</button></a></li>
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
                        <img src="{{ asset('src/undraw_newspaper.svg') }}" alt="" width="70%">
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
            <section id="funcionamento" class="mb-40">
                <div class="vantagem secao2-direction-end">
                    <div class="imagem-vantagem">
                        <img src="{{ asset('src/Vector.png') }}" alt="">
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
                        <img src="{{ asset('src/Group 4.png') }}" alt="">
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
                        <img src="{{ asset('src/Calendar2Week.png') }}" alt="">
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
                <a href="#" class="text-base font-bold hover:border-solid hover:border-b-2 hover:border-secondary-300">Converse com nossos especialistas agora mesmo<i class="bi bi-caret-right-fill"></i></a>
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
                        <img src="{{ asset('src/undraw_completed.svg') }}" alt="">
                    </div>
                    <div>
                        <p class="sobre-text text-xl xl:leading-loose text-justify lg:text-base">
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
                    <div>
                        <label for="">Nome para contato: *</label>
                        <input class="text-base w-full" type="text" name="" id="#" placeholder="Seu nome aqui!">
                    </div>
                    <div class="ml-12">
                        <label for="">E-mail: *</label>
                        <input class="text-base w-full" type="text" name="" id="#" placeholder="example@exemple.com">
                    </div>
                    <div class="ml-12">
                        <label for="">Telefone:</label>
                        <input class="text-base w-full" type="text" name="" id="#" placeholder="(00) 00000-0000">
                    </div>
                </div>
                <div class="contato-box">
                    <div class="form-group">
                        <label for="">Tenho&nbsp;interesse:</label><br>
                        <input class="text-base  w-full" type="text" name="" id="" placeholder="Sou programador!">
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
                <div class="my-5">
                    <div class="footer-box mb-1">
                        <p class="text-base">Informações</p>
                        <p class="text-base	">Suporte</p>
                        <p class="text-base	">Entre em contato</p>
                    </div>
                </div>

                <p class="copyright">©Copyright - CaféDigital 2023</p>
            </div>
        </footer>
    </body>
</html>