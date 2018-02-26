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
        $viagens = Viagem::take(21)->orderBy('created_at','desc')->get();
        $carousels = Carousel::all();
        $clientes = Cliente::all();
        $check = Dica::where('tipo','CHECK-IN')->take(8)->get();
        $dicas = Dica::where('tipo','DICAS-VIAGENS')->take(8)->get();
        $especial = Viagem::where('especial',true)->first();
        //dd($especial);
        //dd($clientes);
        return view('index',compact('categorias','continentes','viagens','carousels','clientes','check','dicas','especial'));
    }
    public function exibirTodasViagens()
    {
        $categorias = Categoria::all('nome','thumb');
        $continentes = Continente::all('nome');
        $viagens = Viagem::orderBy('created_at','desc')->get();
        $clientes = Cliente::all();
        $check = Dica::where('tipo','CHECK-IN')->take(8)->get();
        $dicas = Dica::where('tipo','DICAS-VIAGENS')->take(8)->get();
        $especial = Viagem::where('especial',true)->first();
        return view('viagem.todas',compact('categorias','continentes','viagens','clientes','check','dicas','especial'));
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
        //dd($categorias);
        $continentes = Continente::all('nome');
        $cont = Continente::where('id',$viagem->continentes_id)->first();
        $clientes = Cliente::all();
        $especial = Viagem::where('especial',true)->first();
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
        //dd($cat);
        $continentes = Continente::all('nome');
        $especial = Viagem::where('especial',true)->first();
        if (count($cat) >0) {
            $catConti = Categoria::where('id',$cat)->get(['nome']);

        } else {
            $catConti = [];
        }
        
        $categorias = Categoria::all('nome','thumb');

        $viagens = Viagem::where('continentes_id', $continente->id)->get(['titulo', 'destino','title_thumb', 'alt_thumb', 'thumb']);
        $clientes = Cliente::all();
        return view('continente.index',compact('continentes','continente','catConti','categorias','clientes','check','dicas','viagens','especial'));

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
        $especial = Viagem::where('especial',true)->first();
        //dd($categoria);
        $viagens = Viagem::where('categorias_id',$categoria->id)->get();
        $clientes = Cliente::all();
        return view('categoria.index',compact('categorias','categoria','continentes','viagens','clientes','check','dicas','especial'));

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
        $especial = Viagem::where('especial',true)->first();
        $cont = Continente::where('nome', $continente)->get(['id','nome']);
        $cat = Viagem::where('continentes_id',$cont[0]->id)->distinct()->get(['categorias_id'])->toArray();
        if (count($cat) >0) {
            $catConti = Categoria::where('id',$cat)->get(['nome']);

        } else {
            $catConti = [];
        }
        $continentes = Continente::all('nome');
        $categorias = Categoria::all('nome','thumb');
        $viagens = Viagem::where('categorias_id',$categoria->id)
        ->where('continentes_id',$cont[0]->id)
        ->get();
        $clientes = Cliente::all();
        return view('categoria.index_continente',compact('categorias','cont','categoria','continentes','viagens','clientes','check','dicas','especial'));

    }
    public function postSearch(Request $request)
    {
        $busca = $request->search;
        $clientes = Cliente::all();
        $categorias = Categoria::all('nome','thumb');
        $viagens = Viagem::where('titulo','like','%'.$busca.'%')
        ->select('id','titulo','thumb')
        ->get();
        $conts = Continente::where('nome','like','%'.$busca.'%')
        ->select('id','nome','descricao','capa')
        ->get();
        $continentes = Continente::all('nome');
        $cats = Categoria::where('nome','like','%'.$busca.'%')
        ->select('id','nome','descricao','thumb')
        ->get();

        $msg = "Desculpe, nada foi encontrado na busca por ".$busca."!";
        if (count($viagens) == 0 && count($cats) == 0 && count($conts) == 0) {
            Session::flash('flash_message',[
                'msg'=>$msg,
                'class'=>"alert warning alert-dismissible",
                'alert-type' => 'warning'
            ]);
            return redirect()->route('pagina.index');
        } 
        
        //dd($continentes);
        return view('resultados',compact('categorias','clientes','viagens','continentes','conts','cats','categorias','busca'));
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
                $message->from('naoreponder@formulaturimo.com.br');
                $message->to('formula@formulaturimo.com.br', 'Admin')->subject('Contato pelo Site');
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
                'user_message' => "Mostrou Interesse pela viagem " . $request->get('viagem'),
                'message' => $request->get('mensagem')
            ], function($message)
            {
                $message->from('naoreponder@formulaturimo.com.br');
                $message->to('formula@formulaturimo.com.br', 'Cliente')->subject('Reserva pelo Site');
            });
        Session::flash('flash_message',[
            'msg'=>"Obrigado Por entrar em contato! Seu E-mail foi Enviado com Sucesso",
            'class'=>"alert success alert-dismissible",
            'alert-type' => 'success'
        ]);
        return redirect()->back();
    }
}
