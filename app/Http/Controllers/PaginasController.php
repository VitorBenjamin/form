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

    public function exibirViagem()
    {
    	//$viagem = Viagem::with('imgs','categoria')->where('id',$id);
    	return view('continente.index');

    }
}
