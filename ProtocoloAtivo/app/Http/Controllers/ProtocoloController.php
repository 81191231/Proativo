<?php namespace PROATIVO\Http\Controllers;

use Illuminate\Http\Request;
use PROATIVO\Http\Requests\ProtocoloRequest;
use PROATIVO\Protocolo;
use PROATIVO\destinatario;
use PROATIVO\User;
use PROATIVO\Setor;
use PROATIVO\Tipo_documento;
use Illuminate\Support\Facades\DB;
class ProtocoloController extends Controller{
	public function listar(){ 
		$protocolos = Protocolo::all();
		if(!empty($protocolos)){
			return view('protocolo.listar',['protocolos'=>$protocolos]);	
		}else{
			$msg = '1';
			return view('protocolo.listar',compact('msg'));	
		}
		return;
	}

	public function baixa(Request $request,$id){
		$protocolo = Protocolo::find($id)->update($request->all());
		if(!empty($protocolo)){
			return view('protocolo.baixa',compact('protocolo'));
		}else{
			return view('protocolo.baixa',compact('protocolo'));
		}
	}

	public function novo(){
		$destinatarios = destinatario::all();
		
		$users = User::all();
		
		$tipo_documentos = Tipo_documento::all();
		$setors = Setor::all();
		return view('protocolo.novo',compact('users','setors', 'tipo_documentos'),['destinatarios'=>$destinatarios]);
	}

	public function update(Request $request, $id){ 
		$protocolo = Protocolo::find($id)->update($request->all());
		$msg = '<div id="modal" class="alert alert-success" role="alert">Protocolo atualizado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return redirect('Protocolo');
	}

	public function store(Request $request){
		$input = $request->all(); 			
		$pt= Protocolo::create($input);
		$e = $input->get('Emitente');
		$msg = '<div id="modal" class="alert alert-success" role="alert">Protocolo gerado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		$destinatarios = destinatario::all();
		$emitentes = Emitente::all();
		$tipo_documentos = Tipo_documento::all();
		$setors = Setor::all();
		return view('protocolo.novo',compact('emitentes','msg','setors', 'tipo_documentos'),['destinatarios'=>$destinatarios]);
	}

	public function editar($id){
		$emitentes = Emitente::all();
		$destinatarios = destinatario::all();
		$setors = setor::all();
		$tipo_documentos = Tipo_documento::all();
		$protocolo = Protocolo::find($id);
		if(!empty($protocolo)){
			return view('protocolo.editar', compact('setors','tipo_documentos','destinatarios','emitentes','id'),['protocolo'=>$protocolo]);
		}else{	
			$msg = 'Erro ao tentar consultar protocolo!';
			return view('errors.503',compact('msg'));
		}
	}

	public function comprovante($id){
		$protocolo = Protocolo::find($id);
		return view('comprovante',['protocolo'=>$protocolo]);
	}

	public function cancelar($id){
		$protocolo = Protocolo::find($id)-update();
		return view('protocolo.listar',compact('protocolo'));
	}

}