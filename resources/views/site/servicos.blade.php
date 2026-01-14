@extends('site.layouts.main')

@section('style',asset('css/site/servicos.css'))

@section('content')

<div class="vazio">

</div>

        <!--
            serviços
        -->
        <div class="container-fluid" id="servicos">
            <h1>Nossos serviços</h1>
            <h2>Entenda como podemos lhe ajudar.</h2>
            <div class="" id="box-card-servicos">

                <div class="card card-servicos">
                    <div class="card-body">
                        <div class="card-servico-icon">
                            <div>
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Nome do serviço</h5>
                        <p class="card-text">Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio.</p>
                    </div>
                </div>

                <div class="card card-servicos">
                    <div class="card-body">
                        <div class="card-servico-icon">
                            <div>
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Nome do serviço</h5>
                        <p class="card-text">Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio.</p>
                    </div>
                </div>

                <div class="card card-servicos">
                    <div class="card-body">
                        <div class="card-servico-icon">
                            <div>
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Nome do serviço</h5>
                        <p class="card-text">Criamos soluções personalizadas que atendem às necessidades específicas do seu negócio.</p>
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

        
@endsection
