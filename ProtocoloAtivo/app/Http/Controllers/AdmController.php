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
	
	public function storeUserPost(Request $data){
        User::create($data->all());
        $msg = 'Cadastrado';        
		return redirect()->action('AdmController@listarUserGet', ['msg' => $msg]);
    }

	public function novoUserGet(){
		$setors = Setor::all();
		return view('adm.user.novo',compact('setors'));
	}

	public function editarUserGet($id){
		$user = User::find($id);
		if(!empty($user)){
			return view('adm.user.editar',compact('user'));
		}else{

		}
		return;
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
	
	public function storeSetorPost(Request $data){
        Setor::create($data->all());
        $msg = 'Cadastrado';
		return redirect()->action('AdmController@listarSetorGet', ['msg' => $msg]);
    }

	public function novoSetorGet(){
		$setors = Setor::all();
		return view('adm.Setor.novo',compact('setors'));
	}

	public function editarSetorGet($id){
		$setor = Setor::find($id);
		if(!empty($setor)){
			return view('adm.setor.editar',compact('setor'));
		}else{
			$msg = 'setor_inexistente';
		}
		return;
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
