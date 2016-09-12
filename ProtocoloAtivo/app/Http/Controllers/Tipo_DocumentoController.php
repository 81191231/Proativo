<?php namespace PROATIVO\Http\Controllers; 
use Illuminate\Http\Request;
use PROATIVO\Http\Requests;
use PROATIVO\Tipo_documento;
class Tipo_DocumentoController extends Controller{
	//
	//
	public function cadastroDocumento(Request $request){
		try{
			$input = $request->all();
			//$bdsearch = Tipo_documento::find($input);
			//if($bdsearch===null){
			Tipo_documento::create($input);
			$msg = '<div id="modal" class="alert alert-success" role="alert">Tipo de documento cadastrado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			//}else{
			//$msg = '<div id="modal" class="alert alert-success" role="alert">Tipo de documento já existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			//}
			return view('Tipo_documento.novo',compact('msg'));
		}
		catch(Exception $ex){
			$msg = '<div id="modal" class="alert alert-danger" role="alert">Erro ao cadastrar novo tipo de doucmento!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div></div>';
		}
		return;
	}
	//
	//
	public function listar(){ 
		$msg = null;
		try{
			$tipo_documentos = Tipo_documento::all(); 
			return view('tipo_documento.listar',['tipo_documentos'=>$tipo_documentos]);
		}catch(Exception $e){
			$msg = '<div id="modal" class="alert alert-danger" role="alert">Nenhum tipo de documento existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}
		return;
	}
}