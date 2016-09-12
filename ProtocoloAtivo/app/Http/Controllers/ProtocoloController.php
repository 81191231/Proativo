<?php namespace PROATIVO\Http\Controllers;
use Illuminate\Http\Request;

use PROATIVO\Http\Requests;
use PROATIVO\Protocolo;
use PROATIVO\destinatario;
use PROATIVO\Emitente;
use PROATIVO\Tipo_documento;
use Illuminate\Support\Facades\DB;
class ProtocoloController extends Controller{
	//Este controller tem como finalidade o retorno apenas das view referentes 
	//a ele
	//Método Get da view
	//!Funcionando Corretamente
	public function listar(){ 
			$protocolos = Protocolo::all();
			if($protocolos != null){
				return view('protocolo.listar',['protocolos'=>$protocolos],compact('msg'));	
			}else{
				$msg = '<div id="modal" class="alert alert-danger" role="alert">Nenhum protocolo existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
				return view('protocolo.listar',compact('msg'));	
			}
		return;
	}
	//
	//
	public function baixa($id){
		$protocolo = Protocolo::find($id);
		return view('protocolo.baixa',compact('protocolo'));
	}
	//Método Get da view
	//!Funcionando Corretamente
	public function novo(){
		try{
			$destinatarios = destinatario::all();
			$emitentes = Emitente::all();
			$tipo_documentos = Tipo_documento::all();
			return view('protocolo.novo',compact('emitentes','tipo_documentos'),['destinatarios'=>$destinatarios]);
		}catch(Exception $e){
			$msg = '<div id="modal" class="alert alert-danger" role="alert">Ocorreu um problema!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			return view('errors.503',compact('msg'));
		}
		return;
	}
	//Método Get da view
	//!Funcionando Corretamente
	public function buscar(){		
		return view('protocolo.buscar');
	}
 	//Método Put da view
	//!Funcionando Parcialmente
	public function update(ProdutoRequest $request, $id){ 
		$protocolo = Protocolo::find($id)->update($request->all());
		$msg = '<div id="modal" class="alert alert-success" role="alert">Protocolo atualizado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return view('protocolo.listar',compact('msg'));
	}
  	//Método Get da view
	//!Funcionando Parcialmente
	public function store(Request $request){
		$msg = null;
		try{
			$input = $request->all();
			Protocolo::create($input);
			$msg = '<div id="modal" class="alert alert-success" role="alert">Protocolo gerado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}
		catch(Exception $ex){
			$msg = '<div id="modal" class="alert alert-danger" role="alert">Erro ao gerar o protocolo!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div></div>';
		}
		return view('protocolo.novo',compact('msg'));
	}
	//Método Get da view
	//!Funcionando Parcialmente	
	public function editar($id){
		$protocolo = Protocolo::find($id);
		return view('protocolo.editar', compact('protocolo')); 
	}
	//
	//
	public function comprovante($id){
		$protocolo = Protocolo::find($id);
		return view('comprovante',compact('protocolo'));
	}
	//
	//
	public function cancelar($id){
		$protocolo = Protocolo::find($id);
		return view('protocolo.cancelamento',compact('protocolo'));
	}
	//
	//
	public function pesquisa($destinatario){
		try{
			$protocoloP = Protocolo::find($destinatario);
			if($protocoloP!=null){
			$msg = '<div id="modal" class="alert alert-success" role="alert">Nenhum problema existente com esse campo!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			return view('protocolo.listar',compact('protocoloP','msg'));	
			}
		}catch(Exception $e){
			$msg = '<div id="modal" class="alert alert-success" role="alert">Nenhum protocolo existente com esse destinatario!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			return response(compact('msg'));
		}
		return;
	}
	//
	public function vBuscar(){
		return view('protocolo.buscar');
	}
	//
	//
	public function search(Request $request){
		$protocolo = Protocolo::find($request)->where();
		return $protocolo; 
	}

}