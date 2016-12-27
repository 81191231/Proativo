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
    return view('bemvindo');
});
//
Route::get('Login', function () {
    return view('login');
});
//
Route::get('Local/Emitente',function(){
return view('bemvindo');
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
Route::group(['prefix'=>'Protocolo'], function() {

Route::get('','ProtocoloController@listar');

Route::get('Listar','ProtocoloController@listar');

Route::get('Novo','ProtocoloController@novo');

Route::post('Store','ProtocoloController@store');

Route::get('{id}/Cancelar','ProtocoloController@cancelarGet');

Route::get('{id}/Cancelamento','ProtocoloController@cancelarPost');

Route::get('Listar/Protocolos','ProtocoloController@pesquisaGet');

Route::get('{id}/Anexo','ProtocoloController@anexoGet');

Route::get('{id}/Baixa','ProtocoloController@baixaGet');

Route::post('{id}/Baixar', 'ProtocoloController@baixaPost');

Route::post('{id}/update','ProtocoloController@update');

Route::get('{id}/comprovante','ProtocoloController@comprovante');

});
//Rotas do controlador Destinatario

Route::group(['prefix'=>'Destinatario'], function() {

Route::get('','DestinatarioController@listar');

Route::get('Listar','DestinatarioController@listar');

Route::get('Novo','DestinatarioController@novo');

Route::post('Store','DestinatarioController@store');

Route::get('Lista','DestinatarioController@destinatarioGet');

Route::get('{id}/Protocolos','ProtocoloController@protocolosDestinatarioGet');

Route::get('{id}/Editar','DestinatarioController@editar');

Route::post('{id}/Update','DestinatarioController@update');
});

//Rotas do controlador Tipo_documento
Route::group(['prefix'=>'Tipo_Documento'], function() {
	
Route::post('Store','Tipo_DocumentoController@store');

Route::get('', 'Tipo_DocumentoController@listar');

Route::get('Novo', function () {return view('Tipo_documento.novo');});

Route::get('Listar', 'Tipo_DocumentoController@listar');

Route::get('{id}/Deletar', 'Tipo_DocumentoController@deletar');

Route::post('{id}/Update', 'Tipo_DocumentoController@update');
});

//Rotas do controlador Adm

Route::group(['prefix'=>'Adm'], function() {

Route::get('','AdmController@homeGet');

Route::get('Listar/Emitente','AdmController@listarUserGet');

Route::get('Novo/Emitente','AdmController@novoUserGet');

Route::post('Store/Emitente','AdmController@storeUserPost');

Route::post('Buscar/Emitente','AdmController@buscarUserPost');

Route::get('Editar/{id}/Emitente','AdmController@editarUserGet');

Route::post('Update/{id}/Emitente','AdmController@editarUserPost');

Route::get('Listar/Setor','AdmController@listarSetorGet');

Route::get('Novo/Setor','AdmController@novoSetorGet');

Route::post('Store/Setor','AdmController@storeSetorPost');

Route::post('Buscar/Setor','AdmController@buscarSetorPost');

Route::get('Setor/{id}/Users','AdmController@listarSetorUsersGet');

Route::post('Update/{id}/Setor','AdmController@editarSetorPost');

});

