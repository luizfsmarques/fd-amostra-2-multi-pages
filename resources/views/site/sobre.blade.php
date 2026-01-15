@extends('site.layouts.main')

@section('style',asset('css/site/sobre.css'))

@section('content')

    <div class="vazio">

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
                            <a href="#ir-saiba-mais" id="btn-saiba-mais">Saiba mais</a>
                        </div>
                        <div>
                            <a href="/contato" class="last-btn">Entre em contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
            Saiba mais   
        -->

            <div class="container-fluid box-saiba-mais" id="ir-saiba-mais">

                <div class="row box-saiba-mais-aberto">
                    <h2>Um pouco da nossa história</h2>
                    <p>
                        Nosso escritório nasceu do sonho de oferecer uma advocacia mais próxima, humana e comprometida com resultados reais. Fundado por profissionais apaixonados pelo Direito, começamos atendendo pequenos casos com a mesma dedicação que hoje aplicamos às grandes demandas. Com o passar dos anos, conquistamos a confiança de nossos clientes por meio de um trabalho sério, transparente e estratégico. Cada vitória fortaleceu nossa reputação e nos impulsionou a crescer, sempre mantendo como prioridade a ética, o respeito e a defesa dos direitos de quem confia em nosso trabalho. Hoje, seguimos evoluindo, unindo experiência e inovação para oferecer soluções jurídicas sólidas e eficazes.
                        Ao longo dessa trajetória, ampliamos nossa atuação e investimos constantemente em atualização, tecnologia e capacitação profissional, para acompanhar as mudanças da legislação e oferecer um serviço cada vez mais eficiente. Nosso crescimento foi construído com base em relacionamentos duradouros, atenção aos detalhes e uma atuação estratégica, sempre focada em entregar soluções que realmente façam a diferença na vida de nossos clientes.
                        Mais do que resolver processos, acreditamos em construir confiança. Cada cliente é atendido de forma única, com escuta ativa, orientação clara e total comprometimento com seu caso. Essa filosofia nos permitiu consolidar uma reputação sólida no mercado jurídico, tornando nosso escritório uma referência em qualidade, seriedade e resultados.
                        Nosso escritório nasceu do sonho de oferecer uma advocacia mais próxima, humana e comprometida com resultados reais. Fundado por profissionais apaixonados pelo Direito, começamos atendendo pequenos casos com a mesma dedicação que hoje aplicamos às grandes demandas. Com o passar dos anos, conquistamos a confiança de nossos clientes por meio de um trabalho sério, transparente e estratégico. Cada vitória fortaleceu nossa reputação e nos impulsionou a crescer, sempre mantendo como prioridade a ética, o respeito e a defesa dos direitos de quem confia em nosso trabalho. Hoje, seguimos evoluindo, unindo experiência e inovação para oferecer soluções jurídicas sólidas e eficazes.
                        Ao longo dessa trajetória, ampliamos nossa atuação e investimos constantemente em atualização, tecnologia e capacitação profissional, para acompanhar as mudanças da legislação e oferecer um serviço cada vez mais eficiente. Nosso crescimento foi construído com base em relacionamentos duradouros, atenção aos detalhes e uma atuação estratégica, sempre focada em entregar soluções que realmente façam a diferença na vida de nossos clientes.
                        Mais do que resolver processos, acreditamos em construir confiança. Cada cliente é atendido de forma única, com escuta ativa, orientação clara e total comprometimento com seu caso. Essa filosofia nos permitiu consolidar uma reputação sólida no mercado jurídico, tornando nosso escritório uma referência em qualidade, seriedade e resultados.
                        
                    </p>
                </div>

            </div>      

        <!--
            Nosso time
        -->
        <div class="container-fluid" id="time">
            <h1>Nosso time</h1>
            <h2>Entenda como podemos lhe ajudar.</h2>
            <div class="" id="box-card-time">

                <div class="card-time">
                    <div class="card-time-body">
                        <div class="img-time">
                            <img src="{{asset('img/nosso-time/time-1.svg')}}" alt="Imagem da empresa que depõe.">
                        </div>
                        <h5 class="card-time-title">Nome</h5>
                        <p class="card-time-title">Cargo</p>
                        <div class="redes-time">
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="card-time">
                    <div class="card-time-body">
                        <div class="img-time">
                            <img src="{{asset('img/nosso-time/time-2.svg')}}" alt="Imagem da empresa que depõe.">
                        </div>
                        <h5 class="card-time-title">Nome</h5>
                        <p class="card-time-title">Cargo</p>
                        <div class="redes-time">
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="card-time">
                    <div class="card-time-body">
                        <div class="img-time">
                            <img src="{{asset('img/nosso-time/time-3.svg')}}" alt="Imagem da empresa que depõe.">
                        </div>
                        <h5 class="card-time-title">Nome</h5>
                        <p class="card-time-title">Cargo</p>
                        <div class="redes-time">
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="card-time">
                    <div class="card-time-body">
                        <div class="img-time">
                            <img src="{{asset('img/nosso-time/time-4.svg')}}" alt="Imagem da empresa que depõe.">
                        </div>
                        <h5 class="card-time-title">Nome</h5>
                        <p class="card-time-title">Cargo</p>
                        <div class="redes-time">
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="time-icons-redes" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    </div>
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

