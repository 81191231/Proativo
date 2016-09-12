<?php namespace PROATIVO\Http\Controllers;
use Mail;
use PROATIVO\Http\Requests;
use PROATIVO\User;
class UserController extends Controller{

	  public function send(Request $request, $id){
        $user = User::findOrFail($id);

        	Mail::send('emails.reminder', ['user' => $user], 
        	
        	function ($m) use ($user){
            $m->from('hello@app.com', 'Your Application');
            $m->to($user->email, $user->name)->subject('Your Reminder!');
     		});
    }
    public function send()
      {
        $input = Input::all();
        Mail::send('emails.contatos.index', $input, function($message) {
          $message->to('email@dominio_do_site.com.br')->replyTo(Input::get('email'))->subject('Contato do site');
        });
        return Redirect::to('form');
      }
}