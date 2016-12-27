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
	
	protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

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

	public function baixaPost(Request $request,$id, \Illuminate\Contracts\Filesystem\Factory $fs){
		$protocolo = Protocolo::find($id);
		$diskCloud = $fs->disk('public');
		$diskCloud->put($protocolo->id."Anexo".$protocolo->created_at."-Protocolo.jpg",$request->get('anexo_comprovante'));
		Protocolo::find($id)->update(['status'=>$request['status'],'anexo_comprovante'=>$protocolo->id."Anexo".$protocolo->created_at."-Protocolo.jpg",'dada_hora_recebimento'=>$request['data_hora_recebimento'],'recebedor'=>$request['recebedor'],'alterador'=>$request['alterador'],'descricao'=>$request['descricao']]);
		return redirect()->action('ProtocoloController@listar');
	}
	
	public function baixaGet($id){
		$protocolo = Protocolo::find($id);
		$users = User::all();
		return view('protocolo.baixa',compact('protocolo','users'));
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
		$users = User::all();
		return view('protocolo.cancelamento', compact('protocolo','<users></users>'));
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

	public function protocolosDestinatarioGet($id){
		$protocolos = Protocolo::all()->where('destinatario_id',$id);
		return view('destinatario.protocolos',compact('protocolos'));
	}

}