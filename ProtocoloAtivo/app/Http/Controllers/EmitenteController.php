<?php namespace PROATIVO\Http\Controllers;
use Illuminate\Http\Request;

use PROATIVO\Http\Requests;
use PROATIVO\Emitente;
use PROATIVO\Protocolo;
class EmitenteController extends Controller{
	//Este controller tem como finalidade o retorno apenas das view referentes 
	//a ele
	
	//Método Get da view
	//!Funcionando Corretamente
	public function listar(){ 
		//realiza o select no banco de dados e atribui a consulta a variável $emitentes
		$emitentes = Emitente::all(); 
		return view('emitente.listar',['emitentes'=>$emitentes]); 
	}
	//Method Get da view
	public function novo(){		
		return view('emitente.novo');
	}
	//Method Get da view
	//!Funcionando Corretamente
	public function buscar(){		
		return view('emitente.editar');
	}
	//
	//
	public function busca(EmitenteRequest $request, $nome){
	$emitentes = Emitente::find($nome);	
		return view(['emitente'=>$emitentes]);
	}
	//
	//
	public function buscarProtocolos($id){
	$emitentesProtocolos = Protocolos::find($id);	
		return view(['emitentesProtocolos'=>$emitentesProtocolos]);
	}
 	//Method Put da view 
 	//!Funcionando Parcialmente
	public function update(EmitenteRequest $request, $id){ 
		$emitente = Emitente::find($id)->update($request->all());
		return view('emitente.editar');
	}
  	//Método Post da view que cria um novo emitente.
  	//!Funcionando Corretamente
	public function store(Request $request){
		$msg = null;
		try{
			$input = $request->all();
			Emitente::create($input);
			$msg = '<div id="modal" class="alert alert-success" role="alert">Emitente cadastrado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}
		catch(Exception $ex){
			$msg = '<div id="modal" class="alert alert-danger" role="alert">Erro ao cadastrar emitente!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>';
			}
		return view('emitente.novo',compact('msg'));
	}
	//Método Get da view retornando um emitente especificado pelo o id
	//!Funcionando Parcialmente	
	public function editar($id){
		$emitente = Emitente::find($id);
		return view('emitente.editar', compact('emitente')); 
	}
}