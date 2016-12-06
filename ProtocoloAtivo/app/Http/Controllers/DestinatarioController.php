<?php namespace PROATIVO\Http\Controllers;
use Illuminate\Http\Request;

use PROATIVO\Http\Requests;
use PROATIVO\destinatario;
class DestinatarioController extends Controller{

	public function listar(){ 
		$destinatarios = destinatario::all(); 
		return view('auth.emitente.destinatario.listar',['destinatarios'=>$destinatarios]);
	}

	public function novo(){		
		return view('auth.emitente.destinatario.novo');
	}

	public function buscar(){		
		return view('auth.emitente.destinatario.editar');
	}

	public function update(Request $request, $id){ 
		$destinatario = destinatario::find($id)->update($request->all());
		return redirect()->action('DestinatarioController@listar');
	}
  	
	public function store(Request $request){
		try{	
			$input = $request->all();
			destinatario::create($input);
			$msg = '<div id="modal" class="alert alert-success" role="alert">Destinatário cadastrado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}
		catch(Exception $ex){
			$msg = '<div id="modal" class="alert alert-danger" role="alert">Erro ao cadastrar destinatário!</div>';
		}
		return view('auth.emitente.destinatario.novo',compact('msg'));
	}
	
	public function editar($id){
		$destinatario = destinatario::find($id);
		return view('auth.emitente.destinatario.editar', compact('destinatario')); 
	}
}