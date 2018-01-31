<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Viagem;
use App\Categoria;
use App\Continente;
use App\Carousel;
use Mail;
class PaginasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all('nome');
        $continentes = Continente::all('nome');
        $viagens = Viagem::all();
        $carousels = Carousel::all();
        return view('index',compact('categorias','continentes','viagens','carousels'));
    }

    public function exibirContinente($nome)
    {
    	//$viagem = Viagem::with('imgs','categoria')->where('id',$id);
    	$continente = Continente::where('nome',$nome)->first();

        if (count($continente) == 0) {
            Session::flash('flash_message',[
                'msg'=>"Continente Não Encontrado",
                'class'=>"alert success alert-dismissible",
                'alert-type' => 'warning'
            ]);
            return redirect()->route('pagina.index');
        }
        $continentes = Continente::all('nome');
        $categorias = Categoria::all('nome');
        $viagens = Viagem::where('continentes_id', $continente->id)->get();
        return view('continente.index',compact('continentes','continente','categorias'));

    }
    public function exibirCategoria($nome)
    {
    	//$viagem = Viagem::with('imgs','categoria')->where('id',$id);
    	$categoria = Categoria::where('nome',$nome)->first();
        if (count($categoria) == 0) {
            Session::flash('flash_message',[
                'msg'=>"Categoria Não Encontrada",
                'class'=>"alert success alert-dismissible",
                'alert-type' => 'warning'
            ]);
            return redirect()->route('pagina.index');
        }
        $continentes = Continente::all('nome');
        $categorias = Categoria::all('nome');
        //dd($categoria);
        $viagens = Viagem::where('categorias_id',$categoria->id)->get();
        return view('categoria.index',compact('categorias','categoria','continentes','viagens'));

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
        //     [
        //         'name' => $request->get('nome'),
        //         'email' => $request->get('email'),
        //         'user_message' => $request->get('mensagem')
        //     ], function($message)
        //     {
        //         $message->from('moselo@betsoccer.club');
        //         $message->to('moselo@betsoccer.club', 'Admin')->subject('Contato pelo Site');
        //     });
        Session::flash('flash_message',[
            'msg'=>"Obrigado Por entrar em contato! Seu E-mail foi Enviado com Sucesso",
            'class'=>"alert success alert-dismissible",
            'alert-type' => 'success'
        ]);
        return redirect()->back();
    }
}
