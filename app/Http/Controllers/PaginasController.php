<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Viagem;
use App\Categoria;
use App\Continente;
use App\Carousel;
use App\Cliente;
use App\Dica;
use App\Img;
use Mail;
class PaginasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all('nome','thumb');
        $continentes = Continente::all('nome');
        $viagens = Viagem::all();
        $viagens2 = Viagem::all();
        $carousels = Carousel::all();
        $clientes = Cliente::all();
        $check = Dica::where('tipo','CHECK-IN')->take(8)->get();
        $dicas = Dica::where('tipo','DICAS-VIAGENS')->take(8)->get();
        //dd($clientes);
        return view('index',compact('categorias','continentes','viagens','viagens2','carousels','clientes','check','dicas'));
    }

    public function exibirViagem($nome)
    {
        //$viagem = Viagem::with('imgs','categoria')->where('id',$id);
        $check = Dica::where('tipo','CHECK-IN')->take(8)->get();
        $dicas = Dica::where('tipo','DICAS-VIAGENS')->take(8)->get();
        $viagem = Viagem::where('titulo',$nome)->first();
        // dd($viagem->id);
        // $img = Img::where('viagens_id',$viagem->id)->first();
        // dd($img);
        $cat = Viagem::where('continentes_id',$viagem->continentes_id)->distinct()->get(['categorias_id'])->toArray();
        $catCont = Categoria::where('id',$cat)->get(['nome']);
        $categorias = Categoria::all('nome','thumb');
        $continentes = Continente::all('nome');
        $cont = Continente::where('id',$viagem->continentes_id)->first();
        $clientes = Cliente::all();

        //dd($cont);
        if (count($viagem) == 0) {
            Session::flash('flash_message',[
                'msg'=>"Viagem Não Encontrado",
                'class'=>"alert success alert-dismissible",
                'alert-type' => 'warning'
            ]);
            return redirect()->route('pagina.index');
        }
        //$viagems = Viagem::all('nome');
        return view('viagem.index',compact('clientes','categorias','continentes','viagem','check','dicas','catCont','cont'));

    }

    public function exibirContinente($nome)
    {
    	//$viagem = Viagem::with('imgs','categoria')->where('id',$id);
        $check = Dica::where('tipo','CHECK-IN')->take(8)->get();
        $dicas = Dica::where('tipo','DICAS-VIAGENS')->take(8)->get();
        $continente = Continente::where('nome',$nome)->first();

        if (count($continente) == 0) {
            Session::flash('flash_message',[
                'msg'=>"Continente Não Encontrado",
                'class'=>"alert success alert-dismissible",
                'alert-type' => 'warning'
            ]);
            return redirect()->route('pagina.index');
        }
        $cat = Viagem::where('continentes_id',$continente->id)->distinct()->get(['categorias_id'])->toArray();
        //dd($t);
        $continentes = Continente::all('nome');
        $categorias = Categoria::where('id',$cat)->get(['nome']);
        $viagens = Viagem::where('continentes_id', $continente->id)->get(['titulo', 'destino','title_thumb', 'alt_thumb', 'thumb']);
        $clientes = Cliente::all();
        return view('continente.index',compact('continentes','continente','categorias','clientes','check','dicas','viagens'));

    }
    public function exibirCategoria($nome)
    {
        $check = Dica::where('tipo','CHECK-IN')->take(8)->get();
        $dicas = Dica::where('tipo','DICAS-VIAGENS')->take(8)->get();
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
        $categorias = Categoria::all('nome','thumb');
        //dd($categoria);
        $viagens = Viagem::where('categorias_id',$categoria->id)->get();
        $clientes = Cliente::all();
        return view('categoria.index',compact('categorias','categoria','continentes','viagens','clientes','check','dicas'));

    }
    public function exibirContinenteCategoria($continente,$categoria)
    {
        //dd($continente);
        $check = Dica::where('tipo','CHECK-IN')->take(8)->get();
        $dicas = Dica::where('tipo','DICAS-VIAGENS')->take(8)->get();
        //$viagem = Viagem::with('imgs','categoria')->where('id',$id);
        $categoria = Categoria::where('nome',$categoria)->first();
        if (count($categoria) == 0) {
            Session::flash('flash_message',[
                'msg'=>"Categoria Não Encontrada",
                'class'=>"alert success alert-dismissible",
                'alert-type' => 'warning'
            ]);
            return redirect()->route('pagina.index');
        }
        $cont = Continente::where('nome', $continente)->get(['id','nome']);
        $cat = Viagem::where('continentes_id',$cont[0]->id)->distinct()->get(['categorias_id'])->toArray();
        $catCont = Categoria::where('id',$cat)->get(['nome']);
        $continentes = Continente::all('nome');
        $categorias = Categoria::all('nome');
        $viagens = Viagem::where('categorias_id',$categoria->id)
        ->where('continentes_id',$cont[0]->id)
        ->get();
        $clientes = Cliente::all();
        return view('categoria.index_continente',compact('categorias','cont','categoria','continentes','viagens','clientes','check','dicas'));

    }
    public function postContact(Request $request)
    {
        //dd($request->all());
        $this->validate($request, 
            [
                'nome' => 'required',
                'email' => 'required|email',
                'mensagem'=>'required'
            ]);

        Mail::send('mail',
            [
                'name' => $request->get('nome'),
                'email' => $request->get('email'),
                'user_message' => $request->get('mensagem')
            ], function($message)
            {
                $message->from('developer@vilacacomunicacao.com.br');
                $message->to('moselo@betsoccer.club', 'Admin')->subject('Contato pelo Site');
            });
        Session::flash('flash_message',[
            'msg'=>"Obrigado Por entrar em contato! Seu E-mail foi Enviado com Sucesso",
            'class'=>"alert success alert-dismissible",
            'alert-type' => 'success'
        ]);
        return redirect()->back();
    }
    public function postReserva(Request $request)
    {
        //dd($request->all());
        $this->validate($request, 
            [
                'nome' => 'required',
                'email' => 'required|email',
            ]);

        Mail::send('mail2',
            [
                'name' => $request->get('nome'),
                'email' => $request->get('email'),
                'user_message' => "Mostrou Interesse pela viagem " . $request->get('viagem')
            ], function($message)
            {
                $message->from('developer@vilacacomunicacao.com.br');
                $message->to('moselo@betsoccer.club', 'Admin')->subject('Reserva pelo Site');
            });
        Session::flash('flash_message',[
            'msg'=>"Obrigado Por entrar em contato! Seu E-mail foi Enviado com Sucesso",
            'class'=>"alert success alert-dismissible",
            'alert-type' => 'success'
        ]);
        return redirect()->back();
    }
}
