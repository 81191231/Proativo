<?php namespace PROATIVO\Http\Controllers;
use Illuminate\Http\Request;

use PROATIVO\Http\Requests;
use PROATIVO\Setor;
class SetorController extends Controller{
	
	public function listar(){ 
		
		$setors = Setor::all(); 
		return view('setor.listar',['setors'=>$setors]); 
	}
	
	public function novo(){		
		return view('setor.novo');
	}
	
	public function buscar(){		
		return view('setor.editar');
	}
	public function delete($id){
		Setor::delete($id);
	}
	
	public function busca(SetorRequest $request, $nome){
		$setors = Setor::find($nome);	
		return view(['setor'=>$setors]);
	}
 	
	public function update(Request $request, $id){ 
		$input = $request->all();
		Setor::find($id)->update($input);
			$msg = '<div id="modal" class="alert alert-success" role="alert">Setor alterado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return redirect()->action('SetorController@listar');
	}
  	
	public function store(Request $request){
		$msg = null;
		try{
			$input = $request->all();
			Setor::create($input);
			$msg = '<div id="modal" class="alert alert-success" role="alert">Setor cadastrado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}
		catch(Exception $ex){
			$msg = '<div id="modal" class="alert alert-danger" role="alert">Erro ao cadastrar Setor!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button></div>';
		}
		return view('Setor.novo',compact('msg'));
	}
	
	public function editar(Request $request, $id){
		$setor = Setor::find($id);
		return view('setor.editar', compact('setor')); 
	}
	
	public function buscarProtocolos($id){
		$setor = Protocolos::all()->where('setor_id',$id);
		return view('setor.editar', compact('setor')); 
	}
}