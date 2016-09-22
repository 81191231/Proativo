<?php namespace PROATIVO\Http\Controllers;
use Illuminate\Http\Request;
use PROATIVO\Http\Requests;
use PROATIVO\Emitente;
use PROATIVO\Setor;
use PROATIVO\Protocolo;
use Illuminate\Support\Facades\DB;
class EmitenteController extends Controller{
	//Este controller tem como finalidade o retorno apenas das view referentes 
	//a ele
	
	//Método Get da view
	//!Funcionando Corretamente
	public function listar(){ 
		//realiza o select no banco de dados e atribui a consulta a variável $emitentes
		$emitentes = DB::table('emitentes')
            ->select('emitentes.*', 'setors.nome as snome')
            ->join('setors', 'emitentes.setor_id', '=', 'setors.id')
            ->get();
		return view('emitente.listar',['emitentes'=>$emitentes]); 
	}
	//Method Get da view
	public function novo(){
		$setors = Setor::all(); 
		return view('emitente.novo',compact('setors'));
	}
	//Method Get da view
	//!Funcionando Corretamente
	public function buscar(){		
		return view('emitente.editar');
	}
	//
	//
	public function busca(EmitenteRequest $request, $nome){
		$emitentes = Emitente::find($nome);	
		return view(['emitente'=>$emitentes]);
	}
	//
	//
	public function buscarProtocolos($id){
		$emitentesProtocolos = DB::table('protocolos')->select('protocolos.*','emitente.nome','setor.nome','tipo_documento.documento')->join('emitentes', 'protocolos.id', '=', 'emitentes.emitente_id')
            ->join('setors', 'protocolos.id', '=', 'setors.setor_id')->join('tipo_documentos', 'protocolos.id', '=', 'tipo_documentos.tipo_documento_id')->where('emitente_id',$id);
		return view('emitente.listarEmitentesProtocolos',['emitentesProtocolos'=>$emitentesProtocolos]);
	}
 	//Method Put da view 
 	//!Funcionando Parcialmente
	public function update(EmitenteRequest $request, $id){ 
		$emitente = Emitente::find($id)->update($request->all());
		return view('emitente.editar');
	}
  	//Método Post da view que cria um novo emitente.
  	//!Funcionando Corretamente
	public function store(Request $request){
			$email = $request->get('email');
			$emailVerifica = DB::table('emitentes')->select('id')->where('email', '=', $email)->get();
			if (empty($emailVerifica)) {
				$input = $request->all();
				Emitente::create($input);
				$msg = '<div id="modal" class="alert alert-success" role="alert">Emitente cadastrado com sucesso!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}else{
				$msg = '<div id="modal" class="alert alert-danger" role="alert">Já existe um emitente cadastrado com o email inserido!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}
			$setors = Setor::all(); 	
		return view('emitente.novo',compact('msg','setors'));
	}
	//Método Get da view retornando um emitente especificado pelo o id
	//!Funcionando Parcialmente	
	public function editar($id){
		$emitente = Emitente::find($id);
		return view('emitente.editar', compact('emitente')); 
	}
}