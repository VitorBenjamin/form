<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Dica;
class dicaController extends Controller
{
	public function index()
	{
		$dicas = Dica::all();
		return view('dica.admin.index',compact('dicas'));
	}
	public function editar($id)
	{
		$dica = Dica::find($id);
		return view('dica.admin.editar',compact('dica'));
	}

	public function create()
	{
		return view('dica.admin.create');
	}
	public function mudarEstado($id)
	{
		$dica = Dica::find($id);
		if ($dica->ativo) {
			$dica->ativo = false;
			$msg ="Dica ".$dica->nome." DESATIVADO com Sucesso!!!";
		}else{
			$dica->ativo = true;
			$msg ="Dica ".$dica->nome." ATIVADO com Sucesso!!!";
		}

		$dica->save();
		Session::flash('flash_message',[
			'msg'=>$msg,
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('dica.index');
	}

	public function salvar(Request $request)
	{ 
		$data = [
			'nome' => $request->nome,
			'descricao' => $request->descricao,
			'tipo' => $request->tipo,
			'ativo' => true
		];

		$dica = Dica::create($data);
		Session::flash('flash_message',[
			'msg'=>"Cadastro do dica Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('dica.create');
	}
	
	public function update(Request $request,$id)
	{	
		$dica = Dica::find($id);
		$data = [
			'nome' => $request->nome,
			'descricao' => $request->descricao,
			'tipo' => $request->tipo,
			'ativo' => $dica->ativo
		];
		$dica->update($data);
		$msg ="Dica ".$dica->nome." Atualizado com Sucesso!!!";
		Session::flash('flash_message',[
			'msg'=>$msg,
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('dica.index');
	}
	public function excluir($id)
	{
		$dica = Dica::find($id);
		$dica->delete();

		Session::flash('flash_message',[
			'msg'=>"Exclusão da dica Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('dica.index');
	}
}
