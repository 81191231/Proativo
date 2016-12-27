<?php

namespace PROATIVO\Http\Controllers;

use Illuminate\Http\Request;

use PROATIVO\Http\Requests;
use PROATIVO\User;
use PROATIVO\Setor;
class AdmController extends Controller{

	public function homeGet(){
		return view('adm.bemvindo');
	} 

    //User Method's
	public function listarUserGet(){
		$users = User::all();
		
		if(empty($users)){
			$msg = 'Nenhum_emitente_existente';
		}
		return view('adm.user.listar',compact('users','msg'));
	}

	public function blockUser($id){
		$user = User::find($id);
		if(!empty($user)){
			
		}else{
			$msg = 'user_inexistente';
		}
		return redirect()->action('AdmController@listarUserGet', ['msg' => $msg]);
		
	}
	
	public function storeUserPost(Request $request){
		$user = User::where('email',$request->get('email'));
		if ($user==null) {
			User::create($request->all());
			$msg = 'cadastrado';        
		}else{
			$msg = 'user_existente';
		}
		$setors = Setor::all();
		return view('adm.user.novo',compact('msg','setors'));	
	}

	public function novoUserGet(){
		$setors = Setor::all();
		return view('adm.user.novo',compact('setors'));
	}

	public function editarUserGet($id){
		$user = User::find($id);
		$setors = Setor::all();
		return view('adm.user.editar',compact('user','setors'));
	}

	public function editarUserPost(Request $request,$id){
		$user = User::find($id)->update($request->all());
		if(!empty($user)){
			return view('adm.user.editar',compact('user'));
		}else{

		}
		return;
	}


	// Setor Method's
	public function listarSetorGet(){
		$setors = Setor::all();
		if(empty($setors)){
			$msg = 'Nenhum_emitente_existente';
		}
		return view('adm.Setor.listar',compact('setors','msg'));
	}

	public function blockSetor($id){
		$setor = Setor::find($id);
		if(!empty($setor)){
			
		}else{
			$msg = 'Setor_inexistente';
		}
		return redirect()->action('AdmController@listarGetEmitente', ['msg' => $msg]);
		
	}
	
	public function storeSetorPost(Request $request){
		$setor = Setor::where('nome','=',$request->get('nome'));
		if($setor==null) {
			Setor::create($request->all());
			$msg = 'cadastrado';	
		}else{
			$msg = 'setor_existente';
		}
		return view('adm.setor.novo', compact('msg'));
	}

	public function novoSetorGet(){
		$setors = Setor::all();
		return view('adm.Setor.novo',compact('setors'));
	}

	public function listarSetorUsersGet($id){
		$users = User::where('setor_id',$id);
		if(empty($users)){
			$msg = 'n_user';
		}
		return view('adm.setor.listarsetorUser',compact('users','msg'));
	}

	public function editarSetorPost(Request $request,$id){
		Setor::find($id)->update($request->all());
		return redirect()->action('AdmController@listarSetorGet');
		
	}
	public function redpassUserPost($id){
		if(User::find($id)->update('password')){		
			return redirect()->action('AdmController@listarUserGet');
		}
	}



}
