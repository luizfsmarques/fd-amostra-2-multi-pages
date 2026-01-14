@extends('site.layouts.main')

@section('style',asset('css/site/contato.css'))

@section('content')

<div class="vazio">

</div>

<!-- 
    Contato
-->

<div class="container-fluid titulo-pagina">
    <h1>Contato</h1>
    <p>O futuro, na sua empresa! Ajudamos você a entender seus dados.</p>
</div>

<div class="container-fluid box-links-contato">
    <div class="links-contato">
        <div>
            <i class="bi bi-telephone"></i>
        </div>
        <a href="https://api.whatsapp.com/send?phone=5522997040207" target="_blank" class="contato-icons">(22) 99704-0207</a>
    </div>
    <div class="links-contato">
        <div>
            <i class="bi bi-envelope"></i>
        </div>
        <a href="mailto:fronteiradigitalsac@gmail.com" target="_blank" class="contato-icons">fronteiradigitalsac@gmail.com</a>
    </div>
</div>

<div class="container-fluid box-form">
    <form class="row g-3" method="POST" action="/sistema/leads/cadastrar/contato">
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
    <script src="{{asset('js/sistema/mascaras/telefone.js')}}" type="text/javascript"></script>
</div>

@endsection
