<?php

namespace PROATIVO\Http\Controllers;

use PROATIVO\Http\Controllers\Auth\AuthController;
use PROATIVO\Http\Controllers\Auth\PasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PROATIVO\Http\Requests;
use PROATIVO\User;
use Illuminate\Support\Facades\DB;
use Crypt;
class LoginController extends Controller{

	protected $redirectTo = '/';

	protected function guard()
{
    return Auth::guard('guard-name');
}

	//LoginPost
	public function login(Request $req) { 
		$emailU = $req->get('email');
		$user = DB::table('users')->where('email',$emailU);
		if(!empty($user)){
			$pass = \Crypt::decrypt($user->only('password'));

			if($req->only('password')===$pass){
				if($user->get('tipo')==='emitente'){
					return redirect()->action('EmitenteController@homeGet');
				}else{
					return redirect()->action('AdmController@homeGetx');
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


}
