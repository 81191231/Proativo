<?php namespace PROATIVO\Http\Controllers;

use Illuminate\Http\Request;
use PROATIVO\Http\Requests\ProtocoloRequest;
use PROATIVO\Protocolo;
use PROATIVO\destinatario;
use PROATIVO\User;
use PROATIVO\Setor;
use PROATIVO\Tipo_documento;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Intervention\Image\Facades\Image;
class ProtocoloController extends Controller{
	
	public function anexoGet($id){
		$protocolo = Protocolo::find($id);
		$anexo = $protocolo->anexo_comprovante;
		$img_anexo = Storage::get($anexo);
		return response()->download($img_anexo);
	}

	public function listar(){ 
		$protocolos = Protocolo::all();
		return view('protocolo.listar',compact('protocolos'));	
	}

	public function baixaPost(Request $request,$id){
		$protocolo = Protocolo::find($id);
		if($request->hasFile('anexo_comprovante') && $request->file('anexo_comprovante')->isValid()){
		$anexo = $request->file('anexo_comprovante');
		$pathToFile = '/Protocolo/Anexo/'.$protocolo->id.'-protocolo.jpg';
		Storage::put($pathToFile, $anexo);
		Protocolo::find($id)->update(['status'=>$request['status'],'anexo_comprovante'=>$pathToFile,'dada_hora_recebimento'=>$request['data_hora_recebimento'],'recebedor'=>$request['recebedor']]);
		}else{
			$msg = 'Arquivo Inválido!';
			return view('protocolo.baixa',compact('msg','protocolo'));
		}
		return redirect()->action('ProtocoloController@listar');
	}
	
	public function baixaGet($id){
		$protocolo = Protocolo::find($id);
		return view('protocolo.baixa',compact('protocolo'));
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
		$input = $request->get('tipo_documento');
		$protocolo = Protocolo::create(['user_id'=> $request['user_id'],'destinatario_id'=> $request['destinatario_id'],'tipo_documento'=> json_encode($request['tipo_documento'])]);
		return redirect()->action('ProtocoloController@listar');			
	}
	public function comprovante($id){
		$protocolo = Protocolo::find($id);
		return view('comprovante',['protocolo'=>$protocolo]);
	}

	public function cancelarGet($id){
		$protocolo = Protocolo::find($id);
		return view('protocolo.cancelamento', compact('protocolo'));
	}
	
	public function cancelarPost($id){
		$protocolo = Protocolo::find($id)-update();
		return view('protocolo.listar',compact('protocolo'));
	}

	public function pesquisaGet(Request $req){
		$status = $req->get('status');
		if($status!='todos'){
		$protocolos = Protocolo::orderBy('updated_at')->where('status', $status);
		return view('protocolo.listar',compact('protocolos'));
		}else{
			return redirect()->action('ProtocoloController@listar');
		}
		return;
	}

}