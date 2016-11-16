<?php namespace PROATIVO\Http\Controllers; 
use Illuminate\Http\Request;
use PROATIVO\Http\Requests;
use PROATIVO\Tipo_documento;
class Tipo_DocumentoController extends Controller{

	public function store(Request $request){
		$input = $request->all();
		
		if(Tipo_documento::create($input)){
			$msg = 'sucesso';	
			
		}else{
			$msg = 'existente';
		}
		return view('Tipo_documento.novo',compact('msg'));
	}

	public function listar(){ 
		$tipo_documentos = Tipo_documento::all();
		if(empty($tipo_documentos)){
			$msg = 'nenhum';	
		}
		return view('tipo_documento.listar',compact('tipo_documentos','msg'));
	}

	public function deletar($id){ 
		$tp = Tipo_documento::find($id);
		if($tp!=""){
		if(Tipo_documento::find($id)->delete()){
			$msg = 'sucesso';
			return redirect()->action('Tipo_DocumentoController@listar');
		}
	}else{
			$msg = 'Erro! Não é possível editar o tipo de documento:'.$id;
			return view('errors.503',compact('msg'));
		}
		return;
	}

	public function update(Request $req,$id){ 
		$tipo_documento = Tipo_documento::find($id)->update($req->all());
		if(!empty($tipo_documento)){
			return redirect()->action('Tipo_DocumentoController@listar');
		}else{
			$msg = 'Erro! Não é possível editar o tipo de documento:'.$id;
			return view('errors.503',compact('msg'));
		}
		return;
	}
}