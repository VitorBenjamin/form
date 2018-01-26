<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viagem;

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
}
