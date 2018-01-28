<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viagem;
use Mail;
class PaginasController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function exibirContinente()
    {
    	//$viagem = Viagem::with('imgs','categoria')->where('id',$id);
    	return view('continente.index');

    }
    public function exibirCategoria()
    {
    	//$viagem = Viagem::with('imgs','categoria')->where('id',$id);
    	return view('categoria.index');

    }
    public function postContact(Request $request)
    {
        //dd($request->all());
        // $this->validate($request, 
        //     [
        //         'nome' => 'required',
        //         'email' => 'required|email',
        //         'mensagem'=>'required'
        //     ]);

        // Mail::send('mail',
        //  array(
        //      'name' => $request->get('nome'),
        //      'email' => $request->get('email'),
        //      'user_message' => $request->get('mensagem')
        //  ), function($message)
        //  {
        //      $message->from('moselo@betsoccer.club');
        //      $message->to('moselo@betsoccer.club', 'Admin')->subject('Contato pelo Site');
        //  });

        $notification = array(
            'message' => 'Obrigado Por entrar em contato! Seu E-mail foi Enviado com Sucesso', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
