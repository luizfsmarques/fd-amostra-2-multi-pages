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

Route::get('/panfleto', function (){
    return view('site/panfleto',['page'=>'panfleto']);
});

// Sistema

// Login

Route::get('/sistema', [LoginController::class,'index']);
Route::get('/sistema/login', [LoginController::class,'index']);
Route::post('/sistema/login/entrar', [LoginController::class,'entrar']);
Route::get('/sistema/logout_sistema/{idUSer}', [LoginController::class,'logout']);

Route::get('/sistema/esqueci_senha', [LoginController::class,'esqueci_senha']);
Route::post('/sistema/enviar_esqueci_senha', [LoginController::class,'enviar_esqueci_senha']);

Route::get('/sistema/alteracao_senha/{email}/{code_alteracao_senha}', [LoginController::class,'alteracao_senha']);
Route::put('/sistema/update_alterar_senha', [LoginController::class,'update_alterar_senha']);

// Route::get('/sistema/primeiro_login', function () {
//     return view('sistema/login/primeiro_login',['page'=>'primeiro_login']);
// });

// Início do sistema

Route::get('/sistema/inicio', [InicioController::class,'index']);

// Confirmacao

// Route::get('/sistema/confirmacao', function () {
//     return view('sistema/layouts/confirmacao/confirmacao',['page'=>'confirmacao']);
// });

// Finalizar exclusao

// Route::get('/sistema/finalizar_exclusao', function () {
//     return view('sistema/layouts/finalizar_exclusao/finalizar_exclusao',['page'=>'finalizar_exclusao']);
// });

// Usuários

// Route::get('/sistema/usuarios/perfil', function () {
//     return view('sistema/usuarios/perfil',['page'=>'perfil']);
// });

// Route::get('/sistema/usuarios/cadastrar', function () {
//     return view('sistema/usuarios/create',['page'=>'cadastrar']);
// });

// Route::get('/sistema/usuarios', function () {

//     $users =  [
//         [
//             'name'=>'joao',
//             'permissao'=>'master',
//             'status'=>'ativo',
//             'online'=>true,
//             'profile_photo_path'=>null,
//             'telefone'=>'22999092378',
//             'bloqueado'=>false,
//         ],
//         [
//             'name'=>'livia',
//             'permissao'=>'administrador',
//             'status'=>'ativo',
//             'online'=>true,
//             'profile_photo_path'=>null,
//             'telefone'=>'22999092378',
//             'bloqueado'=>false,
//         ],
//         [
//             'name'=>'ana',
//             'permissao'=>'usuario',
//             'status'=>'ativo',
//             'online'=>true,
//             'profile_photo_path'=>null,
//             'telefone'=>'22999092378',
//             'bloqueado'=>false,
//         ],
//     ];

//     return view('sistema/usuarios/index',['page'=>'index','users'=>$users]);
// });

// Logs

// Route::get('/sistema/logs', function () {

//     $logs =  [
//         [
//             'name'=>'joao',
//             'permissao'=>'master',
//             'created_at'=>'2025-08-13 14:30:00',
//         ],
//         [
//             'name'=>'livia',
//             'permissao'=>'administrador',
//             'created_at'=>'2025-08-13 14:30:00',
//         ],
//         [
//             'name'=>'ana',
//             'permissao'=>'usuario',
//             'created_at'=>'2025-08-13 14:30:00',
//         ],
//     ];

//     return view('sistema/logs/index',['page'=>'logs','logs'=>$logs]);
// });


// Leads

Route::get('/sistema/leads', [LeadController::class,'index']);

Route::post('/sistema/leads/cadastrar/cta', [LeadController::class,'store_lead_cta']);
Route::post('/sistema/leads/cadastrar/contato', [LeadController::class,'store_lead_contato']);


// Route::get('/sistema/leads/cadastrar', function () {
//     return view('sistema/leads/create',['page'=>'cadastrar']);
// });

// Route::get('/sistema/leads/detalhes', function () {
//     return view('sistema/leads/detalhes',['page'=>'detalhes']);
// });

// Route::get('/sistema/leads/atualizar', function () {
//     return view('sistema/leads/edit',['page'=>'atualizar']);
// });


// Clientes

// Route::get('/sistema/clientes/cadastrar', function () {
//     return view('sistema/clientes/create',['page'=>'cadastrar']);
// });

// Route::get('/sistema/clientes', function () {

//     $clientes =  [
//         [
//             'name'=>'joao',
//             'tipo'=>'pj',
//             'cnpj'=>'124123123123123213',
//             'cpf'=>null,
//             'telefone'=>'124123123123123213',
//         ],
//         [
//             'name'=>'livia',
//             'tipo'=>'pj',
//             'cnpj'=>'124123123123123213',
//             'cpf'=>null,
//             'telefone'=>'124123123123123213',
//         ],
//         [
//             'name'=>'ana',
//             'tipo'=>'pj',
//             'cnpj'=>'124123123123123213',
//             'cpf'=>null,
//             'telefone'=>'124123123123123213',
//         ],
//     ];

//     return view('sistema/clientes/index',['page'=>'clientes','clientes'=>$clientes]);
// });

// Route::get('/sistema/clientes/detalhes', function () {
//     return view('sistema/clientes/detalhes',['page'=>'detalhes']);
// });

// Route::get('/sistema/clientes/atualizar', function () {
//     return view('sistema/clientes/edit',['page'=>'atualizar']);
// });

// Satisfação

// Route::get('/sistema/satisfacao', function () {
//     return view('sistema/satisfacao/create',['page'=>'create']);
// });


// Dashboard

// Route::get('/sistema/dashboard', function () {
//     return view('sistema/dashboard/leads',['page'=>'dashboard_leads']);
// });

// Route::get('/sistema/dashboard/clientes', function () {
//     return view('sistema/dashboard/clientes',['page'=>'dashboard_clientes']);
// });

// Route::get('/sistema/dashboard/satisfacao', function () {
//     return view('sistema/dashboard/satisfacao',['page'=>'dashboard_satisfacao']);
// });