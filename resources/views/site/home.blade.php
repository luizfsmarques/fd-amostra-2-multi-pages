@extends('site.layouts.main')

@section('style',asset('css/site/home.css'))

@section('content')

        <div class="vazio">

        </div>

        <!--
            Banners
         -->
        <div id="banner" class="carousel slide" data-bs-ride="carousel" >

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{asset('img/banner/banner-site-1.svg')}}" class="img-banner" alt="Banner 1 do site">
                    <div class="carousel-caption">
                        <div class="container-fluid">
                            <div class="row info-banner">
                                <h1 id="ed-titulo-banner-1">Soluções jurídicas eficientes</h1>
                                <p>
                                Atuamos com seriedade e compromisso para garantir a melhor solução para o seu caso 
                                </p>
                            </div>
                            <div class="row banner-saiba-mais">
                                <a href="#sobre-nos" id="btn-saiba-mais-banner-1" class="btn-saiba-mais" >Saiba mais</a>
                            </div>
                        </div>            
                    </div>
                </div>

            </div>

        </div>

        <!--
            Sobre nós
        -->
        <div class="container-fluid" id="sobre-nos">
            <div class="row">
                <div class="col-6" id="img-sobre">
                    <img src="img/sobre-nos/sobre-nos-site.svg" alt="Imagem da seção sobre nós" >
                </div>
                <div class="col-6" id="info-sobre">
                    <!-- <h1>Sobre nós</h1> -->
                    <h2>Nosso objetivo é entregar inovação e soluções digitais sob medida. </h2>
                    <p>
                        Somos um escritório de advocacia comprometido em oferecer soluções jurídicas eficientes, com atendimento humanizado, ética e transparência. Atuamos de forma estratégica para proteger os direitos e interesses de nossos clientes, buscando sempre os melhores resultados com responsabilidade e dedicação. 
                    </p>
                    <p>
                        Nossa experiência e compromisso com resultados sólidos nos posicionam como um parceiro confiável na jornada de crescimento das empresas que atendemos.
                    </p>
                    <div id="btns-sobre">
                        <div>
                            <a href="/sobre" id="btn-saiba-mais">Saiba mais</a>
                        </div>
                        <div>
                            <a href="/contato" class="last-btn">Entre em contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 
            Chamada para serviços
        -->

        <div class="container-fluid" id="call-servicos">
            <h1>Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio</h1>
            <div class="" id="box-card-call-servicos">

                <div class="card card-call-servicos">
                    <div class="card-body">
                        <div class="card-call-servico-icon">
                            <div>
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Qualidade</h5>
                        <p class="card-text">Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio.</p>
                    </div>
                </div>

                <div class="card card-call-servicos">
                    <div class="card-body">
                        <div class="card-call-servico-icon">
                            <div>
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Eficiência</h5>
                        <p class="card-text">Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio.</p>
                    </div>
                </div>

                <div class="card card-call-servicos">
                    <div class="card-body">
                        <div class="card-call-servico-icon">
                            <div>
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Eficácia</h5>
                        <p class="card-text">Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio.</p>
                    </div>
                </div>

            </div>

            <a class="link-page-servicos" href="/servicos">Conheça mais sobre nossos serviços!</a>
        </div>

        <!--
            call to action - contato
        -->
        <div class="container-fluid cta-contato" style="background-image: url({{asset('img/cta/cta.svg')}});"> 
            <div class="row">
                <h3>Entre em contato conosco e vamos trilhar juntos essa nova jornada!</h3>
                <a href="/contato">Entre em contato</a>
            </div>                
        </div>

        <!--
            Depoimentos
        -->
        <div class="container-fluid" id="depoimentos">
            <h1>Depoimentos</h1>
            <h2>Veja um pouco do que falam sobre nossos serviços!</h2>
            <div class="" id="box-card-depoimentos">

                <div class="depoimento">
                    <div class="img-empresa">
                        <img src="{{asset('img/depoimentos/depoimento-1.svg')}}" alt="Imagem da empresa que depõe.">
                    </div>
                    <p class="texto">
                        “Adorei o trabalho feito para a minha empresa. Foram muito atenciosos e profissionais em todo o momento!”
                    </p>
                    <p class="site">
                       Site: <a target="_blank" href="#">Site 1</a>
                    </p>
                    <p class="nome">
                        Depoimento 1
                    </p>
                </div>

                <div class="depoimento">
                    <div class="img-empresa">
                        <img src="{{asset('img/depoimentos/depoimento-2.svg')}}" alt="Imagem da empresa que depõe.">
                    </div>
                    <p class="texto">
                        “Adorei o trabalho feito para a minha empresa. Foram muito atenciosos e profissionais em todo o momento!”
                    </p>
                    <p class="site">
                       Site: <a target="_blank" href="#">Site 2</a>
                    </p>
                    <p class="nome">
                        Depoimento 2
                    </p>
                </div>

                <div class="depoimento">
                    <div class="img-empresa">
                        <img src="{{asset('img/depoimentos/depoimento-3.svg')}}" alt="Imagem da empresa que depõe.">
                    </div>
                    <p class="texto">
                        “Adorei o trabalho feito para a minha empresa. Foram muito atenciosos e profissionais em todo o momento!”
                    </p>
                    <p class="site">
                       Site: <a target="_blank" href="#">Site 3</a>
                    </p>
                    <p class="nome">
                        Depoimento 3
                    </p>
                </div>

                <div class="depoimento">
                    <div class="img-empresa">
                        <img src="{{asset('img/depoimentos/depoimento-4.svg')}}" alt="Imagem da empresa que depõe.">
                    </div>
                    <p class="texto">
                        “Adorei o trabalho feito para a minha empresa. Foram muito atenciosos e profissionais em todo o momento!”
                    </p>
                    <p class="site">
                       Site: <a target="_blank" href="#">Site 4</a>
                    </p>
                    <p class="nome">
                        Depoimento 4
                    </p>
                </div>


            </div>
        </div>

        
        <!--
             call to action - contato
        -->
        <div class="container-fluid cta-contato" style="background-image: url({{asset('img/cta/cta.svg')}});"> 
            <div class="row">
                <h3>Entre em contato conosco e vamos trilhar juntos essa nova jornada!</h3>
                <a href="/contato">Entre em contato</a>
            </div>                
        </div>

    
@endsection