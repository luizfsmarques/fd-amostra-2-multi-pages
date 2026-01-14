@extends('site.layouts.main')

@section('style',asset('css/site/contato.css'))

@section('content')

<div class="vazio">

</div>

<!--
            Contato
        -->

        <div class="container-fluid titulo-pagina" id="contato">
            <h1>Contato</h1>
            <p>O futuro, na sua empresa! Ajudamos você a entender seus dados.</p>
        </div>

        <div class="container-fluid box-links-contato">
            <div class="links-contato">
                <div>
                    <i class="bi bi-telephone"></i>
                </div>
                <a href="#" target="_blank" class="contato-icons">(91) 99999-9999</a>
            </div>
            <div class="links-contato">
                <div>
                    <i class="bi bi-envelope"></i>
                </div>
                <a href="#" target="_blank" class="contato-icons">fronteiradigitalsac@gmail.com</a>
            </div>
        </div>

        <div class="container-fluid box-form">
            <form class="row g-3" method="POST" action="#">
                @csrf
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nome" value="{{old('nome')}}" placeholder="Seu nome" maxlength="200" id="nome" required>
                </div>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="telefone" value="{{old('telefone')}}" placeholder="Seu telefone" maxlength="14" id="input-telefone-principal" required>
                </div>
                
                <div class="col-12">
                    <input type="email" class="form-control" name="email" value="{{old('email')}}" id="email" placeholder="Seu e-mail" maxlength="200" required>
                </div>

                <div class="col-12">
                    <input type="text" class="form-control" name="assunto" value="{{old('assunto')}}" id="assunto" placeholder="Assunto" maxlength="300" required>
                </div>

                <div class="col-12">
                    <textarea type="text" class="form-control" name="mensagem" id="mensagem" placeholder="Mensagem" maxlength="500" required>{{old('mensagem')}}</textarea>
                    <input class="input-contato" type="hidden" name="origem" value="contato" readonly  required>
                </div>
                
                <div class="col-12" class="box-btn-contato">
                    <button type="submit" class="btn-contato">Enviar mensagem</button>
                </div>
            </form>
            <script src="{{asset('js/site/mascaras/telefone.js')}}" type="text/javascript"></script>
        </div>


        <!--
            Nossa localização
        -->

        <div class="container-fluid titulo-pagina">
            <h1>Nossa localização</h1>
            <p>Endereço da empresa</p>
        </div>
        
        <div class="container-fluid" id="mapa" style="width:100%; display:flex;align-items:center;justify-content:center;">

            <iframe id="mapa" width="60%" height="450px" style="border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6946355873215!2d-48.41256132602544!3d-1.3598578357088706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a461bac978377f%3A0x26ddf1658fb1c589!2sComplexo%20do%208!5e0!3m2!1spt-BR!2sbr!4v1768330971565!5m2!1spt-BR!2sbr"     
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

@endsection
