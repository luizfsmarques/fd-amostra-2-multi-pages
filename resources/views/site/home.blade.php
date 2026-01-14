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
                    <h1>Sobre nós</h1>
                    <h2>Nosso objetivo é entregar inovação e soluções digitais sob medida. </h2>
                    <p>
                        Somos uma empresa de tecnologia dedicada a desenvolver soluções inovadoras que geram valor e vantagem competitiva para nossos clientes. Com foco em excelência operacional, atuamos no desenvolvimento de sistemas, integração de processos e transformação digital, sempre alinhados às necessidades estratégicas de cada negócio.
                    </p>
                    <p>
                        Nossa experiência e compromisso com resultados sólidos nos posicionam como um parceiro confiável na jornada de crescimento das empresas que atendemos.
                    </p>
                    <div id="btns-sobre">
                        <div>
                            <a href="/sobre">Saiba mais</a>
                        </div>
                        <div>
                            <a href="/contato" class="last-btn">Entre em contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
            call to action - lead
        -->
            
        <!-- <div class="container-fluid cta" style="background-image: url({{asset('img/cta/cta.svg')}});"> 
            <form class="row" method="POST" action="/sistema/leads/cadastrar/cta">
            @csrf
                <h3>Garanta 20% OFF! Aproveite.</h3>
                <p>Sites profissionais e estratégias digitais com preço especial!</p>
                <div id="cta-box-input">
                    <input class="input-cta" type="email" placeholder="Seu e-mail" name="email" value="{{old('email')}}" maxlength="150" required> 
                    <input class="input-cta" type="text" placeholder="Seu telefone" name="telefone" value="{{old('telefone')}}" maxlength="14" id="input-telefone-principal" required>
                    <input class="input-cta" type="hidden" name="origem" value="cta" readonly  required>
                </div>
                <div id="cta-box-privacidade">
                    <input type="checkbox" id="cta_privacidade" name="autorizo" value="true" id="check-cta" required>
                    <label for="cta_privacidade"> Autorizo o uso dos meus dados para Marketing pela Fronteira Digital, e também para obrigações legais e contratuais. <a href="/politica_de_privacidade" id="cta-politica">Política de privacidade<a></label><br>
                </div>
                <div id="btn-cta-lead">
                    <button type="submit" >Eu quero</button>
                </div>
                <script src="{{asset('js/sistema/mascaras/telefone.js')}}" type="text/javascript"></script>
            </form>                
        </div> -->


        <!--
            serviços
        -->
        <div class="container-fluid" id="servicos">
            <h1>Áreas de atuação</h1>
            <h2>Entenda como podemos lhe ajudar.</h2>
            <div class="" id="box-card-servicos">


                <div class="card" id="card1">
                    <div class="card-titulo">
                        <p>Software</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Software + Negócio = Produtividade</h5>
                        <p class="card-text">Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio.</p>
                        <div class="card-servico-icon">
                            <div>
                                <i class="bi bi-laptop"></i>
                            </div>
                        </div>
                        <div class="box-img-servico">
                            <div class="container-fluid img-servico" style="background-image: url({{asset('img/servicos/servico-card-software.svg')}});">
                                <div class="opacidade-img-servico">
                                    <a class="btn-card-servico" href="/servicos/#box-software">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" id="card2">
                    <div class="card-titulo">
                        <p>Hardware</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Computador + Negócio = Agilidade</h5>
                        <p class="card-text">A manutenção é essencial para garantir bom desempenho, segurança e durabilidade do computador.</p>
                        <div class="card-servico-icon">
                            <div>
                                <i class="bi bi-laptop"></i>
                            </div>
                        </div>
                        <div class="box-img-servico">
                            <div class="container-fluid img-servico" style="background-image: url({{asset('img/servicos/servico-card-hardware.svg')}});">
                                <div class="opacidade-img-servico">
                                    <a class="btn-card-servico" href="/servicos/#box-hardware">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" id="card3">
                    <div class="card-titulo">
                        <p>Marketing Digital</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Marketing + Negócio = Evolução</h5>
                        <p class="card-text">Conecte sua marca ao público certo, fortalecendo o engajamento e ampliando seu alcance digital.</p>
                        <div class="card-servico-icon">
                            <div>
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </div>
                        <div class="box-img-servico">
                            <div class="container-fluid img-servico" style="background-image: url({{asset('img/servicos/servico-card-marketing.svg')}});">
                                <div class="opacidade-img-servico">
                                    <a class="btn-card-servico" href="/servicos/#box-marketing">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                


            </div>
        </div>

        <script>
            // Código para mudar a cor dos cards na sessão do serviço
            let cardServico1 = document.querySelector("#card1");

            cardServico1.addEventListener('mouseenter',function(e){
                let boxIconServico = e.target.children[1].children[2].children[0].children[0];
                boxIconServico.style.color = '#25C9BA';

                let opacidadeImagemServico = e.target.children[1].children[3].children[0].children[0];
                opacidadeImagemServico.style.display = 'flex';
            });

            cardServico1.addEventListener('mouseleave',function(e){
                let boxIconServico = e.target.children[1].children[2].children[0].children[0];
                boxIconServico.style.color = '#000000';

                let opacidadeImagemServico = e.target.children[1].children[3].children[0].children[0];
                opacidadeImagemServico.style.display = 'none';
            });    

            let cardServico2 = document.querySelector("#card2");

            cardServico2.addEventListener('mouseenter',function(e){
                let boxIconServico = e.target.children[1].children[2].children[0].children[0];
                boxIconServico.style.color = '#25C9BA';

                let opacidadeImagemServico = e.target.children[1].children[3].children[0].children[0];
                opacidadeImagemServico.style.display = 'flex';
            });

            cardServico2.addEventListener('mouseleave',function(e){
                let boxIconServico = e.target.children[1].children[2].children[0].children[0];
                boxIconServico.style.color = '#000000';

                let opacidadeImagemServico = e.target.children[1].children[3].children[0].children[0];
                opacidadeImagemServico.style.display = 'none';
            });

            let cardServico3 = document.querySelector("#card3");

            cardServico3.addEventListener('mouseenter',function(e){
                let boxIconServico = e.target.children[1].children[2].children[0].children[0];
                boxIconServico.style.color = '#25C9BA';

                let opacidadeImagemServico = e.target.children[1].children[3].children[0].children[0];
                opacidadeImagemServico.style.display = 'flex';
            });

            cardServico3.addEventListener('mouseleave',function(e){
                let boxIconServico = e.target.children[1].children[2].children[0].children[0];
                boxIconServico.style.color = '#000000';

                let opacidadeImagemServico = e.target.children[1].children[3].children[0].children[0];
                opacidadeImagemServico.style.display = 'none';
            });
        </script>

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
                        <img src="{{asset('img/depoimentos/jc-contabilidade.png')}}" alt="Imagem da empresa que depõe.">
                    </div>
                    <p class="texto">
                        “Adorei o resultado! O site e o sistema ficaram lindos, práticos e exatamente do jeito que eu queria. Trabalho atencioso e com muito capricho.”
                    </p>
                    <p class="site">
                       Site: <a target="_blank" href="https://jc-contabilidade.com">jc-contabilidade.com</a>
                    </p>
                    <p class="nome">
                        JC Contabilidade
                    </p>
                </div>

                <div class="depoimento">
                    <div class="img-empresa">
                        <img src="{{asset('img/depoimentos/amor-proprio1.jpeg')}}" alt="Imagem da empresa que depõe.">
                    </div>
                    <p class="texto">
                        “A configuração do meu domínio foi super tranquila. Tudo feito rápido e sem dor de cabeça, agora meu site está no ar direitinho com o endereço que eu queria.”
                    </p>
                    <p class="site">
                       Site: <a target="_blank" href="https://amorpropriolingerie.com.br/">amorpropriolingerie.com.br/</a>
                    </p>
                    <p class="nome">
                        Amor Próprio Lingeries
                    </p>
                </div>

            </div>
        </div>

    
@endsection