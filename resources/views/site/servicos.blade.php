@extends('site.layouts.main')

@section('style',asset('css/site/servicos.css'))

@section('content')

<div class="vazio">

</div>

<!--
    serviços
-->

<div class="container-fluid titulo-pagina">
    <h1>Serviços</h1>
    <p>O futuro, na sua empresa! Ajudamos você a entender seus dados.</p>
</div>

<div class="container-fluid box-servico" id="box-software">
    
    <div class="row titulo-servico">
        <h2><i class="bi bi-arrow-right"></i>Desenvolvimento de Software</h2>
    </div>

    <div class="row box-img-texto">
        <div class="col-4 img-servico">
            <img src="{{asset('img/servicos/servico-card-software.svg')}}" alt="Serviço de software">
        </div>
        <div class="col-8 texto-servico">
            <p>
                Oferecemos desenvolvimento de software sob medida, criado especificamente para atender às particularidades do seu negócio. Diferente das soluções genéricas, nosso software personalizado se adapta exatamente às suas necessidades, otimizando processos, reduzindo custos operacionais e aumentando a eficiência. Com essa abordagem, você ganha maior controle, flexibilidade e produtividade, possibilitando que sua empresa cresça de forma ágil e consistente.
            </p>
        </div>
    </div>

    <div class="container-fluid faixa-promo">
        <img src="{{asset('img/servicos/faixa-promo.svg')}}" alt="">
    </div>

    <div class="container-fluid servico-principal">

        <div class="row">

            <div class="col-4">
                <div class="card card-software" style="width: 18rem;">
                    <div class="software-icon">
                        <i class="bi bi-laptop"></i>     
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Website Essencial</h5>
                        <p class="card-text">Por apenas</p>
                        <p class="card-preco">R$119,90</p>
                        <p class="card-parcelas">Em até 3x R$39,97</p>
                        <p class="card-sem-juros">sem juros</p>
                        <p class="card-manutencao">Manutenção: R$00,00</p>
                        <a href="/contato" class="btn-card-servico">Entre em contato</a>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <h2 class="subtitulo-servico-principal">Para começar a sua presença digital!</h2>
                <p class="texto-servico-principal">
                    Hoje, muitas pessoas procuram empresas e serviços diretamente na internet. Ter um site bem feito ajuda seu negócio a ser encontrado,
                     a transmitir confiança e a mostrar exatamente o que você oferece. 
                     Um bom site é um aliado para não perder clientes e ser um concorrente forte no mercado!
                </p>
                <p class="texto-servico-principal">
                    Para este serviço: Hospedagem e domínio a partir de 12x de R$16,12 (Renovação anual)
                </p>

                <p class="texto-servico-principal">
                    Clique e veja exemplos do nosso serviço:
                </p>

                <p class="texto-servico-principal-amostras">
                    <a target="_blank" href="https://amostra1.fronteiradigital.com">
                        Amostra 1 - Website de página única
                    </a>
                </p>

                <p class="texto-servico-principal-amostras">
                    <a target="_blank" href="https://amostra2.fronteiradigital.com">
                        Amostra 2 - Website de múltiplas páginas
                    </a>
                </p>
                
            </div>

        </div>

    </div>


    <div class="row box-cards">

        <div class="card card-software" style="width: 18rem;">
            <div class="software-icon">
                <i class="bi bi-laptop"></i>     
            </div>
            <div class="card-body">
                <h5 class="card-title">Website Estático Personalizado</h5>
                <p class="card-text">A partir de</p>
                <p class="card-preco">R$599,90</p>
                <p class="card-parcelas">Em até 10x</p>
                <p class="card-sem-juros">sem juros</p>
                <p class="card-manutencao">Manutenção: R$99,90/mês</p>
                <a href="/contato" class="btn-card-servico">Entre em contato</a>
            </div>
        </div>

        <div class="card card-software" style="width: 18rem;">
            <div class="software-icon">
                <i class="bi bi-laptop"></i>     
            </div>
            <div class="card-body">
                <h5 class="card-title">Website Dinâmico</h5>
                <p class="card-text">A partir de</p>
                <p class="card-preco">R$990,90</p>
                <p class="card-parcelas">Em até 10x</p>
                <p class="card-sem-juros">sem juros</p>
                <p class="card-manutencao">Manutenção: R$149,90/mês</p>
                <a href="/contato" class="btn-card-servico">Entre em contato</a>
            </div>
        </div>

        <div class="card card-software" style="width: 18rem;">
            <div class="software-icon">
                <i class="bi bi-laptop"></i>     
            </div>
            <div class="card-body">
                <h5 class="card-title">Sistemas WEB</h5>
                <p class="card-text">A partir de</p>
                <p class="card-preco">R$1.490,90</p>
                <p class="card-parcelas">Em até 10x</p>
                <p class="card-sem-juros">sem juros</p>
                <p class="card-manutencao">Manutenção: R$199,90/mês</p>
                <a href="/contato" class="btn-card-servico">Entre em contato</a>
            </div>
        </div>

        <div class="card card-software" style="width: 18rem;">
            <div class="software-icon">
                <i class="bi bi-laptop"></i>     
            </div>
            <div class="card-body">
                <h5 class="card-title">Landing Page</h5>
                <p class="card-text">A partir de</p>
                <p class="card-preco">R$499,90</p>
                <p class="card-parcelas">Em até 10x</p>
                <p class="card-sem-juros">sem juros</p>
                <p class="card-manutencao">Manutenção: R$00,00</p>
                <a href="/contato" class="btn-card-servico">Entre em contato</a>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid box-servico" id="box-hardware">
    
    <div class="row titulo-servico">
        <h2><i class="bi bi-arrow-right"></i>Manutenção de computadores (Desktop ou Notebook)</h2>
    </div>

    <div class="row box-img-texto">
        <div class="col-4 img-servico">
            <img src="{{asset('img/servicos/servico-card-hardware.svg')}}" alt="Serviço de software">
        </div>
        <div class="col-8 texto-servico">
            <p>
                    Seu computador lento, travando ou com problemas? A gente resolve.
                    Oferecemos serviços de manutenção, formatação, limpeza, e otimização para deixar seu PC ou notebook funcionando rápido e com segurança.
                    Com atendimento confiável e soluções sob medida, cuidamos do seu equipamento para que você possa trabalhar, estudar ou se divertir sem preocupações.
            </p>
        </div>
    </div>

    <div class="container-fluid faixa-promo">
        <img src="{{asset('img/servicos/faixa-promo.svg')}}" alt="">
    </div>

    <div class="container-fluid servico-principal">

        <div class="row">

            <div class="col-4">
                <div class="card card-software" style="width: 18rem;">
                    <div class="software-icon">
                        <i class="bi bi-laptop"></i>     
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Reparo total</h5>
                        <p class="card-text">A partir de</p>
                        <p class="card-preco">R$149,90</p>
                        <p class="card-parcelas">Em até 3x R$49,97</p>
                        <p class="card-sem-juros">sem juros</p>
                        <p class="card-manutencao-pc">Manutenção: R$00,00</p>
                        <a href="/contato" class="btn-card-servico">Entre em contato</a>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <h2 class="subtitulo-servico-principal">Seu computador funcionando novamente!</h2>
                <p class="texto-servico-principal">
                    Quando o computador começa a travar, não liga, apresenta erros ou perde desempenho, 
                    é sinal de que algo precisa ser corrigido. A manutenção corretiva é essencial para identificar falhas, 
                    remover problemas e restaurar o funcionamento do equipamento.

                </p>
                <p class="texto-servico-principal">
                    Ignorar esses sinais pode levar à perda de arquivos importantes e até a danos maiores no sistema. Com o reparo adequado, 
                    seu computador volta a funcionar com estabilidade, segurança e bom desempenho.
                </p>
            </div>

        </div>

    </div>

    <!-- <div class="row box-cards">

        <div class="card card-software" style="width: 18rem;">
            <div class="software-icon">
                <i class="bi bi-laptop"></i>     
            </div>
            <div class="card-body">
                <h5 class="card-title">Serviço espécífico</h5>
                <p class="card-text">A partir de</p>
                <p class="card-preco">R$599,90</p>
                <p class="card-parcelas">Em até 10x</p>
                <p class="card-sem-juros">sem juros</p>
                <a href="/contato" class="btn-card-servico">Entre em contato</a>
            </div>
        </div>
    
    </div> -->

    
</div>



<div class="container-fluid box-servico" id="box-marketing">
    
    <div class="row titulo-servico">
        <h2><i class="bi bi-arrow-right"></i>Marketing Digital</h2>
    </div>

    <div class="row box-img-texto">
        <div class="col-4 img-servico">
            <img src="{{asset('img/servicos/servico-card-marketing.svg')}}" alt="Serviço de marketing">
        </div>
        <div class="col-8 texto-servico">
            <p>
                Oferecemos serviços de marketing digital sob medida, especialmente desenvolvidos para fortalecer a percepção da sua marca no mercado. Com estratégias personalizadas, trabalhamos para aumentar o reconhecimento, a credibilidade e a conexão emocional com seu público-alvo. Esse foco na construção da imagem da marca resulta em maior confiança, fidelização e posicionamento competitivo, gerando valor sustentável para o seu negócio.
            </p>
        </div>
    </div>

    <div class="container-fluid faixa-promo">
        <img src="{{asset('img/servicos/faixa-promo.svg')}}" alt="">
    </div>

    <p id="social-info-basico">
        Facebook e Instagram
    </p>
    <p id="conteudo-info-basico">
        Publicação em texto e imagem, informativa e não extensa, de acordo com o
        contexto do cliente.
    </p>
    <p id="conteudo-info-premium">
        Publicação em texto e imagem, informativa e não extensa, de acordo com o
        contexto do cliente. Caso a Fronteira Digital perceber necessidade, poderá ser criado conteúdo em vídeo.
    </p>

    <div class="row box-cards" id="planos_marketing">

        <div class="card card-marketing" style="width: 18rem;" id="plano-basico">
            <div class="marketing-icon">
                <i class="bi bi-clipboard2-data"></i>     
            </div>
            <div class="card-body">
                <h5 class="card-title">Plano Básico</h5>
                <p class="card-preco-original">De</p>
                <p class="preco-original">R$399,90/mês</p>
                <p class="card-preco-promocao">Por apenas</p>
                <p class="preco-promocao">R$249,90/mês</p>

                <div class="itens">
                    <p><i class="bi bi-check"></i> Redes sociais <i class="bi bi-exclamation-circle" id="social-basico"></i></p>
                    <p><i class="bi bi-check"></i> Criação de conteúdos <i class="bi bi-exclamation-circle" id="conteudo-basico"></i></p>
                    <p><i class="bi bi-check"></i> 1 Website estático</p>
                    <!-- <p><i class="bi bi-x"></i> 1 Landing page</p> -->
                    <!-- <p><i class="bi bi-x"></i> Funil de vendas</p> -->
                    <!-- <p><i class="bi bi-x"></i> Gestão de lead</p> -->
                    <!-- <p><i class="bi bi-x"></i> Relatório mensal</p> -->
                    <!-- <p><i class="bi bi-x"></i> Sistema de gerenciamento de clientes</p> -->
                    <!-- <p><i class="bi bi-x"></i> Sistema de medição de satisfação de clientes</p> -->
                </div>

                <a href="/contato" class="btn-card-servico">Entre em contato</a>
            </div>
        </div>



        <!-- <div class="card card-marketing" style="width: 18rem;">
            <div class="marketing-icon">
                <i class="bi bi-clipboard2-data"></i>     
            </div>
            <div class="card-body">
                <h5 class="card-title">Plano Essencial</h5>
                <p class="card-preco-original">De</p>
                <p class="preco-original">R$599,90</p>
                <p class="card-preco-promocao">Por apenas</p>
                <p class="preco-promocao">R$349,90</p>

                <div class="itens">
                    <p><i class="bi bi-check"></i> Redes sociais <i class="bi bi-exclamation-circle" id="social-essencial"></i></p>
                    <p><i class="bi bi-check"></i> Criação de conteúdos <i class="bi bi-exclamation-circle" id="conteudo-essencial"></i></p>
                    <p><i class="bi bi-check"></i> 1 Website estático</p>
                    <p><i class="bi bi-check"></i> 1 Landing page</p>
                    <p><i class="bi bi-check"></i> Funil de vendas</p>
                    <p><i class="bi bi-check"></i> Gestão de lead</p>
                    <p><i class="bi bi-check"></i> Relatório mensal</p>
                    <p><i class="bi bi-x"></i> Sistema de gerenciamento de clientes</p>
                    <p><i class="bi bi-x"></i> Sistema de medição de satisfação de clientes</p>
                </div>

                <a href="/contato" class="btn-card-servico">Entre em contato</a>
            </div>
        </div> -->

        <!-- <div class="card card-marketing" style="width: 18rem;">
            <div class="marketing-icon">
                <i class="bi bi-clipboard2-data"></i>     
            </div>
            <div class="card-body">
                <h5 class="card-title">Plano Premium</h5>
                <p class="card-preco-original">De</p>
                <p class="preco-original">R$899,90</p>
                <p class="card-preco-promocao">Por apenas</p>
                <p class="preco-promocao">R$449,90</p>

                <div class="itens">
                    <p><i class="bi bi-check"></i> Redes sociais <i class="bi bi-exclamation-circle" id="social-premium"></i></p>
                    <p><i class="bi bi-check"></i> Criação de conteúdos <i class="bi bi-exclamation-circle" id="conteudo-premium"></i></p>
                    <p><i class="bi bi-check"></i> 1 Website estático</p>
                    <p><i class="bi bi-check"></i> 1 Landing page</p>
                    <p><i class="bi bi-check"></i> Funil de vendas</p>
                    <p><i class="bi bi-check"></i> Gestão de lead</p>
                    <p><i class="bi bi-check"></i> Relatório mensal</p>
                    <p><i class="bi bi-check"></i> Sistema de gerenciamento de clientes</p>
                    <p><i class="bi bi-check"></i> Sistema de medição de satisfação de clientes</p>
                </div>

                <a href="/contato" class="btn-card-servico">Entre em contato</a>
            </div>
        </div> -->
      

    </div>

    <p id="social-info-basico-resp">
        <span>Observação - Redes sociais para todos os planos: </span>
        Facebook e Instagram.
    </p>
    <p id="conteudo-info-basico-resp">
        <span>Observação - Criação de conteúdos para os planos básico e essencial: </span>
        Publicação em texto e imagem, informativa e não extensa, de acordo com o
        contexto do cliente.
    </p>
    <!-- <p id="conteudo-info-premium-resp">
        <span>Observação - Criação de conteúdos para os plano premium: </span>
        Publicação em texto e imagem, informativa e não extensa, de acordo com o
        contexto do cliente. Caso a Fronteira Digital perceber necessidade, poderá ser criado conteúdo em vídeo.
    </p> -->

</div>

<script>
    
    let socialBasico = document.querySelector("#social-basico");
    let conteudoBasico = document.querySelector("#conteudo-basico");
    let socialEssencial = document.querySelector("#social-essencial");
    let conteudoEssencial = document.querySelector("#conteudo-essencial");
    let socialPremium = document.querySelector("#social-premium");
    let conteudoPremium = document.querySelector("#conteudo-premium");

    let socialInfoBasico = document.querySelector("#social-info-basico");
    let conteudoInfoBasico = document.querySelector("#conteudo-info-basico");
    let conteudoInfoPremium = document.querySelector("#conteudo-info-premium");

    let infoServicoOnOff = (exclamation,info,premium)=>{

        exclamation.addEventListener('mouseenter',function(e){
            
            const larguraJanela = window.innerWidth;

            if(larguraJanela>=1200){

                info.style.display = "inline-block";
                info.style.position = "absolute";
                if(premium){
                    info.style.left = (e.pageX-350)+"px";
                    info.style.top = e.pageY+"px";
                }else{
                    // info.style.left = e.pageX+"px";
                    info.style.left = (e.pageX-150)+"px";
                    info.style.top = e.pageY+"px";
                }
            
            }
            
        });

        exclamation.addEventListener('mouseleave',function(e){
            info.style.display = "none";
        });  

    }

    infoServicoOnOff(socialBasico,socialInfoBasico,false);
    infoServicoOnOff(conteudoBasico,conteudoInfoBasico,false);

    infoServicoOnOff(socialEssencial,socialInfoBasico,false);
    infoServicoOnOff(conteudoEssencial,conteudoInfoBasico,false);

    infoServicoOnOff(socialPremium,socialInfoBasico,true);
    infoServicoOnOff(conteudoPremium,conteudoInfoPremium,true);

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
    FAQ
-->
<div class="container-fluid" id="box-accordion">
    <h1 class="titulo-faq">FAQ</h1>
    <div class="accordion" id="accordionExample">
        
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Preciso de hospedagem ou domínio?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Sim, é essencial. Porém não se preocupe, nós contratamos esses serviços para você e deixamos tudo pronto para você usar!
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Qual a diferença entre a hospedagem e domínio, do serviço Website Essencial para o Website Estático Personalizado e demais serviços de software?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    A única diferença é que para o serviço Website Essencial e Landing Page, o valor da hospedagem e domínio não estão embutidos no investimento do serviço.
                     Já para o serviço Website Estático Personalizado e os demais, temos um valor de manutenção mensal que já lhe garante o servidor e o domínio.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    O que é hospedagem e domínio?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    De uma forma simples, a hospedagem é computador onde seu site ou sistema ficará guardado, para que possa ser acessado através da internet. Já o domínio, é como um nome para o seu site ou sistema.   
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Para que serve o serviço de marketing digital?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    O propósito principal do marketing digital é alcançar o seu público-alvo. Aqui na Fronteira Digital, fazemos isso criando as principais estruturas para sua empresa ter presença online, divulgar seus serviços ou produtos e se relacionar com seus clientes, fortalecendo cada vez mais a sua marca.    
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Como um software pode me ajudar?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    O software ele vem para trazer mais produtividade nos seus processos. Com o software você consegue visualizar, processar os seus dados para ter informações e até automatizar tarefas repetitivas. Aqui na Fronteira Digital trabalhamos com softwares básicos e com softwares construídos sob medida, para a sua empresa.     
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                   Por que eu precisaria de um software sob medida?
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    O software sob medida é desenvolvido de acordo com as necessidades específicas da sua empresa, ao contrário dos sistemas prontos que oferecem funcionalidades genéricas. Isso significa que ele se adapta totalmente aos processos internos, eliminando funções desnecessárias e otimizando tarefas importantes.   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
