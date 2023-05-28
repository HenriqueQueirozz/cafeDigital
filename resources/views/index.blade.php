<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Café Digital</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/bootstrap.css">
        <link rel="stylesheet" href="./css/landing.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <header id="landing-header">
            <nav id="navegation-bar">
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
                    <li><a class="highlight-option" href="/cadastro" title="Cadastrar-se">Cadastrar-se</a></li>
                    <li><a href="/login"><button class="btn-vermelho" title="Conectar-se">Conectar-se</button></a></li>
                </ul>
            </nav>
        </header>
        <main id="landing-main">
            <section id="chamada">
                <div>
                    <div class="chamada-info">
                        <div>
                            <h1>Lorem Ipsum</h1>
                            <h2>consectetur adipiscing elit</h2>
                            <p class="chamada-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet, lectus ac dictum bibendum, orci lacus sagittis ante, vitae tristique massa orci venenatis ligula.</p>
                        </div>
                    </div>
                    <div class="chamada-image">
                        <img src="./src/undraw_newspaper.svg" alt="">
                    </div>
                </div>
            </section>
            <section id="informacoes">
                <h2 class="informacoes-subtitle section-subtitle">consectetur adipiscing elit</h2>
                <h1 class="informacoes-title section-title mb-5">Lorem Ipsum</h1>

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
                <p class="informacoes-text my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet, lectus ac dictum bibendum, orci lacus sagittis ante, vitae tristique massa orci venenatis ligula. Aliquam aliquet, lectus ac dictum bibendum, orci lacus sagittis ante, vitae tristique massa orci venenatis ligula. In nibh eros, dignissim et velit eu, dignissim convallis dolor.</p>
                <a href="#planos">Conheça nossos planos<i class="bi bi-caret-right-fill"></i></a>
            </section>
            <section id="secao2">
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
                        <p class="secao2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet, lectus ac dictum bibendum, orci lacus sagittis ante, vitae tristique massa orci venenatis ligula.</p>
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
                        <p class="secao2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet, lectus ac dictum bibendum, orci lacus sagittis ante, vitae tristique massa orci venenatis ligula.</p>
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
                        <p class="secao2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet, lectus ac dictum <b>bibendum, orci lacus sagittis</b> ante, vitae tristique massa orci venenatis ligula.</p>
                    </div>
                </div>
                <a href="#">Converse com nossos especialistas agora mesmo<i class="bi bi-caret-right-fill"></i></a>
            </section>
            <section id="planos">
                <h1 class="planos-title section-title">Conheça nossos Planos!</h1>
                <h2 class="planos-subtitle section-subtitle mb-5">consectetur adipiscing elit</h2>

                <div>
                    <div class="plano-card">
                        <h2>Frater</h2>
                        <p class="card-subtitle">Lorem ipsum dolor sit amet</p>

                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet lectus ac dictum</p>
                            <p>Lorem ipsum dolor sit amet lectus ac dictum</p>
                        </div>

                        <h1>R$ 199,00 / mês</h1>
                        <button class="btn-vermelho mt-1">Contratar</button>
                    </div>
                    <div class="plano-card">
                        <h2>Club Owner</h2>
                        <p class="card-subtitle">Lorem ipsum dolor sit amet</p>

                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet lectus ac dictum</p>
                            <p>Lorem ipsum dolor sit amet lectus ac dictum</p>
                        </div>

                        <h1>R$ 615,00 / mês</h1>
                        <p class="card-detalhe">aproximadamente</p>
                        <button class="btn-vermelho mt-1">Contratar</button>
                    </div>
                </div>
            </section>
            <section id="sobre">
                <h2 class="sobre-subtitle section-subtitle">consectetur adipiscing elit</h2>
                <h1 class="sobre-title section-title mb-5">Lorem Ipsum</h1>

                <div>
                    <div class="sobre-image">
                        <img src="./src/undraw_completed.svg" alt="">
                    </div>
                    <div>
                        <p class="sobre-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut bibendum dolor, a tincidunt nunc. Nunc eleifend orci vel tempus dictum. Integer tincidunt sapien quam, in <b>vehicula quam vehicula sit amet. Suspendisse</b> vehicula erat arcu, id facilisis mauris vulputate eu. Maecenas mollis quis arcu hendrerit vulputate. Ut a commodo enim. Proin;<br><br>
                            Aenean bibendum velit eu tempus tincidunt. Vivamus luctus, est non luctus posuere, justo felis luctus nisl, vel mattis elit eros eget libero. <b>Proin semper, purus eget malesuada varius, nulla lectus</b> molestie neque, at varius risus elit id nisi. Donec congue volutpat laoreet. Morbi sit amet eros eget enim semper sollicitudin quis ut augue.
                        </p>
                    </div>
                </div>
                
            </section>
            <section id="contato" class="mt-5">
                <h2 class="contato-title">Seja informado sobre as novidades!</h2>

                <div class="form-group">
                    <label for="">Nome para contato:</label>
                    <input class="contato-input" type="text" name="" id="" placeholder="Seu nome aqui!">
                </div>
                
                <div class="form-group">
                    <label for="">E-mail:</label>
                    <input class="contato-input" type="text" name="" id="" placeholder="example@exemple.com">
                </div>

                <div class="contato-box">
                    <div class="form-group">
                        <label for="">Tenho interesse em:</label>
                        <input class="contato-input" type="text" name="" id="" placeholder="Sou programador!">
                    </div>

                    <button class="btn-vermelho">Cadastrar Contato</button>
                </div>
            </section>
        </main>
        <footer id="landing-footer">
            <div>
                <div class="footer-box">
                    <div class="box-icone"><i class="bi bi-twitter"></i></div>
                    <div class="box-icone"><i class="bi bi-facebook"></i></div>
                    <div class="box-icone"><i class="bi bi-instagram"></i></div>
                </div>
                <div class="my-1">
                    <div class="footer-box mb-1">
                        <p>Informações</p>
                        <p>Suporte</p>
                        <p>Entre em contato</p>
                    </div>
                    <div class="footer-box">
                        <p>Termos de uso e condições de uso</p>
                    </div>
                </div>

                <p class="copyright">©Copyright - CaféDigital 2023</p>
            </div>
        </footer>
        <script src="./js/requisicoes.js"></script>
    </body>
</html>