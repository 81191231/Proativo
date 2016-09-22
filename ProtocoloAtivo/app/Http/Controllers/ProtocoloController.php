<?php namespace PROATIVO\Http\Controllers;
use Illuminate\Http\Request;

use PROATIVO\Http\Requests;
use PROATIVO\Protocolo;
use PROATIVO\destinatario;
use PROATIVO\Emitente;
use PROATIVO\Setor;
use PROATIVO\Tipo_documento;
use Illuminate\Support\Facades\DB;
class ProtocoloController extends Controller{
	//Este controller tem como finalidade o retorno apenas das view referentes 
	//a ele
	//Método Get da view
	//!Funcionando Corretamente
	public function listar(){ 
			$protocolos = DB::table('protocolos')
            ->select('protocolos.*', 'emitentes.nome as enome', 'tipo_documentos.documento as tdocumento','setors.nome as snome','destinatarios.nome as dnome')
            ->join('emitentes', 'protocolos.emitente_id', '=', 'emitentes.id')
            ->join('tipo_documentos', 'protocolos.tipo_documento_id', '=', 'tipo_documentos.id')
            ->join('setors', 'protocolos.setor_id', '=', 'setors.id')
            ->join('destinatarios', 'protocolos.destinatario_id', '=', 'destinatarios.id')
            ->get();
			if(!empty($protocolos)){
				return view('protocolo.listar',['protocolos'=>$protocolos],compact('msg'));	
			}else{
				$msg = '<div id="modal" class="alert alert-danger" role="alert">Nenhum protocolo existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
				return view('protocolo.listar',compact('msg'));	
			}
		return;
	}
	//
	//
	public function baixa(Request $request,$id){
		$input = Request::all();
		$protocolo = Protocolo::find($id)->update();
		return view('protocolo.baixa',compact('protocolo'));
	}
	//Método Get da view
	//!Funcionando Corretamente
	public function novo(){
			$destinatarios = destinatario::all();
			$emitentes = Emitente::all();
			$tipo_documentos = Tipo_documento::all();
			$setors = Setor::all();
		return view('protocolo.novo',compact('emitentes','setors', 'tipo_documentos'),['destinatarios'=>$destinatarios]);
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
			$input = $request->all();
			Protocolo::create($input);
			$msg = '<div id="modal" class="alert alert-success" role="alert">Protocolo gerado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			$destinatarios = destinatario::all();
			$emitentes = Emitente::all();
			$tipo_documentos = Tipo_documento::all();
			$setors = Setor::all();
		return view('protocolo.novo',compact('emitentes','msg','setors', 'tipo_documentos'),['destinatarios'=>$destinatarios]);
	}
	//Método Get da view
	//!Funcionando Parcialmente	
	public function editar($id){
		$protocolo = Protocolo::find($id);
		$emitentes = Emitente::all();
		$destinatarios = destinatario::all();
		$setors = setor::all();
		$tipo_documentos = Tipo_documento::all();
		return view('protocolo.editar', compact('setors','tipo_documentos','destinatarios','emitentes'),['protocolo'=>$protocolo]);
	}
	//
	//
	public function comprovante($id){
		$protocolo = Protocolo::find($id);
		$emitentes = Emitente::all();
		$destinatarios = destinatario::all();
		$setors = setor::all();
		$tipo_documentos = Tipo_documento::all();
		/*
        $e_id = $protocolo->get('emitente_id');
        $emitente = Emitente::find($e_id);
        $d_id = $protocolo->get('destinatario_id');
        $destinatario = destinatario::find($d_id);
        $s_id = $protocolo->get('setor_id');
        $setor = Setor::find($s_id);
        $t_id = $protocolo->get('tipo_documento_id');
        $Tipo_documento = Tipo_documento::find($t_id);
        */
		return view('comprovante',compact('setors','Tipo_documentos','destinatarios','emitentes'),['protocolo'=>$protocolo]);
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