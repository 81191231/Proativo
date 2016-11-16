<?php

namespace PROATIVO\Http\Controllers;

use Illuminate\Http\Request;

use PROATIVO\Http\Requests;
use PROATIVO\User;
class AdmController extends Controller
{
    //

    public function listarGet(){
    	$users = User::all()->where('tipo','=','emitente');
    	if(empty($users)){
    		$msg = 'Nenhum emitente existente';
    	}
    	return view('emitente.listar',compact('users'));
    }
}
