<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContatoController;

// site

Route::get('/', function () {
    return view('site/home',['page'=>'home']);
});

Route::get('/sobre', function () {
    return view('site/sobre',['page'=>'sobre']);
});

Route::get('/servicos', function () {
    return view('site/servicos',['page'=>'servicos']);
});

Route::get('/planos', function (){
    return view('site/servicos',['page'=>'planos']);
});

Route::get('/contato', function (){
    return view('site/contato',['page'=>'contato']);
});

Route::post('/contato/enviar-contato', [ContatoController::class,'enviar_contato']);

Route::get('/politica_de_privacidade', function (){
    return view('site/politica_privacidade',['page'=>'politica_privacidade']);
});

