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

Route::controllers(['auth' => 'Auth\AuthController', 'password' => 'Auth\PasswordController']); 

Route::get('/', function () {
    return view('login');
});
//
Route::get('Login', function () {
    return view('login');
});
//
Route::post('Log','LoginController@login');
//
Route::get('Cadastro',function(){
	return view('signup');
});
Route::post('Signup','LoginController@create');
//
Route::get('Ajuda', function() {
    return view('ajuda');
});
//
Route::post('Help', 'UserController@send');
//
Route::get('Informacoes', function () {
    return view('mais_inf');
});

Route::get('Perfil', 'UserController@perfil');

Route::post('Perfil/update', 'UserController@updateperfil');

//Rotas do controlador Protocolo
Route::group(['prefix'=>'Protocolo','middleware'=>'auth'], function() {

Route::get('','ProtocoloController@listar');

Route::get('Listar','ProtocoloController@listar');

Route::get('Novo','ProtocoloController@novo');

Route::post('Store','ProtocoloController@store');

Route::get('{id}/Editar','ProtocoloController@editar');

Route::get('{id}/Cancelamento','ProtocoloController@cancelar');

Route::get('{id}/Baixa','ProtocoloController@baixa');

Route::post('{id}/update','ProtocoloController@update');

Route::get('{id}/comprovante','ProtocoloController@comprovante');

});
//Rotas do controlador Destinatario

Route::group(['prefix'=>'Destinatario','middleware'=>'auth'], function() {

Route::get('','DestinatarioController@listar');

Route::get('Listar','DestinatarioController@listar');

Route::get('Novo','DestinatarioController@novo');

Route::post('Store','DestinatarioController@store');

Route::get('Buscar','DestinatarioController@buscar');

Route::get('{id}/Editar','DestinatarioController@editar');

Route::post('{id}/Update','DestinatarioController@update');
});
//Rotas do controlador Emitente

Route::group(['prefix'=>'Emitente','middleware'=>'auth'], function() {
Route::get('Listar','EmitenteController@listar');

Route::get('Novo','AuthController@create');

Route::post('Store','EmitenteController@store');

Route::get('Buscar','EmitenteController@buscar');

Route::get('{id}/Protocolos','EmitenteController@buscarProtocolos');

Route::get('{id}/Editar','EmitenteController@editar');

Route::post('{id}/Update','EmitenteController@update');
});
//Rotas do controlador Tipo_documento
Route::group(['prefix'=>'Tipo_Documento','middleware'=>'auth'], function() {
	
Route::post('Store','Tipo_DocumentoController@store');

Route::get('', 'Tipo_DocumentoController@listar');

Route::get('Novo', function () {return view('Tipo_documento.novo');});

Route::get('Listar', 'Tipo_DocumentoController@listar');

Route::get('{id}/Deletar', 'Tipo_DocumentoController@deletar');

Route::post('{id}/Update', 'Tipo_DocumentoController@update');
});

//Rotas do controlador Setor
Route::group(['prefix'=>'Setor','middleware'=>'auth'], function() {

Route::get('','SetorController@listar');

Route::get('Listar','SetorController@listar');

Route::get('Novo','SetorController@novo');

Route::post('Store','SetorController@store');

Route::get('Buscar','SetorController@buscar');

Route::get('{id}/Protocolos','SetorController@buscarProtocolos');

Route::get('{id}/Editar','SetorController@editar');

Route::post('{id}/Update','SetorController@update');
});