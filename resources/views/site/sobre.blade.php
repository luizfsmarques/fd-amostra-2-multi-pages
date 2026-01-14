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
                    <h1>Sobre nós</h1>
                    <h2>Transformamos tecnologia em soluções que fazem a diferença para sua empresa.</h2>
                    <p>
                    Nosso compromisso é oferecer soluções tecnológicas sob medida, sempre colocando as necessidades do cliente em primeiro lugar. Trabalhamos com dedicação e excelência para garantir atendimento personalizado, suporte contínuo e resultados que superem expectativas.    
                    </p>
                    <p>
                    Buscamos entender profundamente os desafios de cada cliente para entregar soluções eficientes e inovadoras, garantindo não apenas a satisfação, mas também a parceria duradoura e o sucesso conjunto.    
                    </p>
                </div>
            </div>
        </div>


        <!-- 
            Missão, visão e valores
        -->
        <div class="container-fluid" id="missao">
            <h1>Missão</h1>
            <p>
            Empoderar empreendedores por meio de soluções acessíveis e inovadoras em tecnologia
            e marketing, oferecendo as ferramentas, estratégias e suporte necessários para transformar ideias em negócios sustentáveis e de alto impacto.    
            </p>
        </div>

        <div class="container-fluid" id="visao">
            <h1>Visão</h1>
            <p>
                Ser a principal parceira de crescimento para empreendedores no Brasil, reconhecida por
                impulsionar negócios com visibilidade, estratégia e valor duradouro.
            </p>

        <div class="container-fluid" id="valores">
            <h1>Valores</h1>
            <div>
                <p>
                    <span>Inovação com propósito:</span> Usamos tecnologia e criatividade para gerar soluções
                    práticas e eficientes.
                </p>
                    
                <p>
                    <span>Empreendedorismo acessível:</span> Tornamos o marketing e a tecnologia descomplicados e ao alcance de todos.
                </p>
                  
                <p>
                    <span>Crescimento colaborativo:</span> Acreditamos no poder das parcerias e no sucesso
                    construído em conjunto.
                </p>
                   
                <p>
                    <span>Compromisso com resultados:</span> Focamos em entregar valor real, mensurável e
                    contínuo para cada cliente.
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

