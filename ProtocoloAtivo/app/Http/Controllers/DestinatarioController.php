<?php namespace PROATIVO\Http\Controllers;

use Illuminate\Http\Request;
use PROATIVO\Http\Requests;
use PROATIVO\destinatario;
class DestinatarioController extends Controller{

	public function listar(){ 
		$destinatarios = destinatario::all(); 
		return view('destinatario.listar',['destinatarios'=>$destinatarios]);
	}

	public function novo(){		
		return view('destinatario.novo');
	}

	public function buscar(){		
		return view('destinatario.editar');
	}
	
	public function update(Request $request, $id){ 
		$destinatario = destinatario::find($id)->update($request->all());
		return redirect()->action('DestinatarioController@listar');
	}

	public function destinatarioGet(Request $request){
		$destinatario = Destinatario::find($request->all());
		return view('destinatario.destinatario', $destinatario);
		
	}
  	
	public function store(Request $request){
			$cnpj = $request->get('cnpj');
			$destinatario = Destinatario::find($cnpj);
			if(($destinatario==null)&&($destinatario=="")){
			destinatario::create($request->all());
			$msg = '<div id="modal" class="alert alert-success" role="alert">Destinatário cadastrado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}else{
				$msg = '<div id="modal" class="alert alert-danger" role="alert">Erro ao cadastrar destinatário!</div>';
			}
		return view('destinatario.novo',compact('msg'));
	}
	
	public function editar($id){
		$destinatario = destinatario::find($id);
		return view('destinatario.editar', compact('destinatario')); 
	}
}