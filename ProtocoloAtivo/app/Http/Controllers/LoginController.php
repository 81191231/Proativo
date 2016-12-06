<?php

namespace PROATIVO\Http\Controllers;

use PROATIVO\Http\Controllers\Auth\AuthController;
use PROATIVO\Http\Controllers\Auth\PasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PROATIVO\Http\Requests;
use PROATIVO\User;
use PROATIVO\Adm;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller{

	protected $redirectTo = '/';

	protected function guard()
{
    return Auth::guard('guard-name');
}

	//LoginPost
	public function login(Request $req) { 
		$emailU = $req->get('email');
		$password = $req->get('password');
			$adm = DB::table('Adms')->where('email',$emailU);
			if(!empty($adm)){
				if(Auth::guard('adm')->attempt(['email' => $emailU, 'password' => $password],false,false)){
					return redirect()->action('AdmController@homeGet');
				}else{
					return view('login');
					
				}
			}
			$msg = 'user_inexistente';
			return view('login',compact('msg'));
	}

	public function create(Request $req){
		$adm = Adm::create($req->all());
		return view('login');
	}



}
