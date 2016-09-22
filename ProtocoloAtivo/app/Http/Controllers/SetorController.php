<?php namespace PROATIVO\Http\Controllers;
use Illuminate\Http\Request;

use PROATIVO\Http\Requests;
use PROATIVO\Setor;
class SetorController extends Controller{
	//Este controller tem como finalidade o retorno apenas das view referentes 
	//a ele
	
	//Método Get da view
	//!Funcionando Corretamente
	public function listar(){ 
		//realiza o select no banco de dados e atribui a consulta a variável $Setors
		$setors = Setor::all(); 
		return view('setor.listar',['setors'=>$setors]); 
	}
	//Method Get da view
	public function novo(){		
		return view('setor.novo');
	}
	//Method Get da view
	//!Funcionando Corretamente
	public function buscar(){		
		return view('setor.editar');
	}
	//
	//
	public function busca(SetorRequest $request, $nome){
		$setors = Setor::find($nome);	
		return view(['setor'=>$setors]);
	}
 	//Method Put da view 
 	//!Funcionando Parcialmente
	public function update(SetorRequest $request, $id){ 
		$setor = Setor::find($id)->update($request->all());
		return view('Setor.editar');
	}
  	//Método Post da view que cria um novo Setor.
  	//!Funcionando Corretamente
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
	//Método Get da view retornando um Setor especificado pelo o id
	//!Funcionando Parcialmente	
	public function editar($id){
		$setor = Setor::find($id);
		return view('setor.editar', compact('setor')); 
	}
	//
	//
	public function buscarProtocolos($id){
		$setor = Protocolos::all()->where('setor_id',$id);
		return view('setor.editar', compact('setor')); 
	}
}