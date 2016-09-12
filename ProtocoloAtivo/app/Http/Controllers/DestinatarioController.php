<?php namespace PROATIVO\Http\Controllers;
use Illuminate\Http\Request;

use PROATIVO\Http\Requests;
use PROATIVO\destinatario;
class DestinatarioController extends Controller{
	//Este controller tem como finalidade o retorno apenas das view referentes 
	//a ele

	//Método Get da view
	//!Funcionando Corretamente
	public function listar(){ 
	//realiza o select no banco de dados e atribui a consulta a variável $destinatarios
	try{$destinatarios = destinatario::all(); 
	//retorna a view de listar junto com a variável
		return view('destinatario.listar',['destinatarios'=>$destinatarios]);
	}catch(Exception $e){
		//
		return view('errors.503');
	}
	return;
	}
	//Método Get da view
	//!Funcionando Corretamente
	public function novo(){		
		return view('destinatario.novo');
	}
	//Método Get da view
	//!Funcionando Corretamente
	public function buscar(){		
		return view('destinatario.editar');
	}
 	//Método Put da view Editar
	//!Funcionando Parcialmente
	public function update(DestinatarioRequest $request, $id){ 
		$destinatario = destinatario::find($id)->update($request->all());
		return view('destinatario.editar');
	}
  	//Método Post da view
	//!Funcionando Corretamente
	public function store(Request $request){
		$msg = null;
		try{	
		$input = $request->all();
		destinatario::create($input);
		$msg = '<div id="modal" class="alert alert-success" role="alert">Destinatário cadastrado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}
		catch(Exception $ex){
			$msg = '<div id="modal" class="alert alert-danger" role="alert">Erro ao cadastrar destinatário!</div>';
			}
		return view('destinatario.novo',compact('msg'));
	}
	//Método Post da view
	//!Funcionando Parcialmente
	public function editar(){
		$destinatario = destinatario::find($id);
		return view('destinatario.editar', compact('destinatario')); 
	}
}