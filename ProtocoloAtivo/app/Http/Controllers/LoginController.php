<?php

namespace PROATIVO\Http\Controllers;

use PROATIVO\Http\Controllers\Auth\AuthController;
use PROATIVO\Http\Controllers\Auth\PasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PROATIVO\Http\Requests;
use PROATIVO\User;
use Illuminate\Support\Facades\DB;
use Validator;
class LoginController extends Controller{

	protected $redirectTo = '/';

	//LoginPost
	public function login(Request $req) { 
		$emailU = $req->get('email');
		$password = $req->get('password');
		$user = DB::table('users')->where('email',$emailU);
		if(!empty($user)){
			$userLog = array('email'=>$req->get('email'),
				'password'=> bcrypt($req->get('password'))
				);
			if(Auth::attempt($userLog)) {
				if($user->get('tipo')==='emitente'){
					return view('auth.emitente.bemvindo'); 	
				}else{
					return view('auth.adm.bemvindo'); 
				}
				//
			}else{
				$msg = 'email_senha_n_c';
				return view('login',compact('msg'));
			}
		}else{
			$msg = 'user_inexistente';
			return view('login',compact('msg'));
		}
		return;
	}

	protected function create(Request $data){
        User::create(['name' => $data->get('name'),
            'email' => $data->get('email'),
            'password' => bcrypt($data->get('password')),
        ]);
        $msg = 'Cadastrado';
        return view('login',compact('msg'));

    }

}
