<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
Route::get('/', function () {
    return view('bemvindo');
});
//
Route::get('Login', function () {
    return view('login');
});
//
Route::get('Ajuda', function () {
    return view('ajuda');
});
//
Route::post('Help', 'UserController@send');
//
Route::get('Informacoes', function () {
    return view('mais_inf');
});
Route::post('Protocolo/Busca', 'ProtocoloController@pesquisa');

Route::get('Protocolo/Buscar', 'ProtocoloController@vBuscar');

//Rotas do controlador Protocolo
Route::get('Protocolo/Listar','ProtocoloController@listar');

Route::get('Protocolo/Novo','ProtocoloController@novo');

Route::post('Protocolo/Store','ProtocoloController@store');

Route::get('Protocolo/{id}/Editar','ProtocoloController@editar');

Route::get('Protocolo/{id}/Cancelamento','ProtocoloController@cancelar');

Route::get('Protocolo/{id}/Baixa','ProtocoloController@baixa');

Route::put('Protocolo/{id}/update','ProtocoloController@update');

Route::get('Protocolo/{id}/comprovante','ProtocoloController@comprovante');

Route::post('Protocolo/{destinatario}/Pesquisa','ProtocoloController@pesquisa');

//Rotas do controlador Destinatario
Route::get('Destinatario/Listar','DestinatarioController@listar');

Route::get('Destinatario/Novo','DestinatarioController@novo');

Route::post('Destinatario/Store','DestinatarioController@store');

Route::get('Destinatario/Buscar','DestinatarioController@buscar');

Route::post('Destinatario/{id}/Editar','DestinatarioController@editar');

Route::put('Destinatario/{id}/update','DestinatarioController@update');

//Rotas do controlador Emitente
Route::get('Emitente/Listar','EmitenteController@listar');

Route::get('Emitente/Novo','EmitenteController@novo');

Route::post('Emitente/Store','EmitenteController@store');

Route::get('Emitente/Buscar','EmitenteController@buscar');

Route::get('Emitente/{id}/Protocolos','EmitenteController@buscarProtocolos');

Route::get('Emitente/{id}/Editar','EmitenteController@editar');

Route::put('Emitente/{id}/update','EmitenteController@update');

//Rotas do controlador Tipo_documento
Route::post('Tipo_Documento/Cadastro','Tipo_DocumentoController@cadastroDocumento');

Route::get('Tipo_documento/Novo', function () {
    return view('Tipo_documento.novo');
});

Route::get('Tipo_documento/Listar', 'Tipo_DocumentoController@listar');

Route::get('Tipo_documento/{id}/Editar', 'Tipo_DocumentoController@editar');

//Rotas do controlador Setor
Route::get('Setor/Listar','SetorController@listar');

Route::get('Setor/Novo','SetorController@novo');

Route::post('Setor/Store','SetorController@store');

Route::get('Setor/Buscar','SetorController@buscar');

Route::get('Setor/{id}/Protocolos','SetorController@buscarProtocolos');

Route::get('Setor/{id}/Editar','SetorController@editar');

Route::put('Setor/{id}/update','SetorController@update');
