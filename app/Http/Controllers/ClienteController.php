<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
	public function index()
	{
		$cliente = Cliente::all('id','nome','alt','ativo');
		return view('cliente.admin.index',compact('cliente'));
	}
	public function editar($id)
	{
		$cliente = Cliente::find($id);
		return view('cliente.admin.editar',compact('cliente'));
	}

	public function create()
	{
		return view('cliente.admin.create');
	}
	public function mudarEstado($id)
	{
		$cliente = Cliente::find($id);
		if ($cliente->ativo) {
			$cliente->ativo = false;
			$msg ="cliente ".$cliente->nome." DESATIVADO com Sucesso!!!";
		}else{
			$cliente->ativo = true;
			$msg ="cliente ".$cliente->nome." ATIVADO com Sucesso!!!";
		}

		$cliente->save();
		Session::flash('flash_message',[
			'msg'=>$msg,
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('cliente.index');
	}

	public function salvar(Request $request)
	{ 
		$mimeImagem = $request->file('imagem')->getClientMimeType();
		$data = [
			'nome' => $request->nome,
			'alt' => $request->alt,
		];
		if ($mimeImagem == "image/jpeg" || $mimeImagem == "image/png") {
			$file = Image::make($request->file('imagem'));
			$img_64 = (string) $file->encode('data-url');
			$data['imagem'] = $img_64;
		}

		$cliente = Cliente::create($data);
		Session::flash('flash_message',[
			'msg'=>"Cadastro do cliente Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('cliente.create');
	}
	
	public function update(Request $request,$id)
	{	
		$cliente = Cliente::find($id);
		$mimeImagem = $request->file('imagem')->getClientMimeType();
		$data = [
			'nome' => $request->nome,
			'alt' => $request->alt,
		];
		if ($request->file('imagem')) {
			$mimeImagem = $request->file('imagem')->getClientMimeType();
			if ($mimeImagem == "image/jpeg" || $mimeImagem == "image/png") {
				$file = Image::make($request->file('imagem'));
				$img_64 = (string) $file->encode('data-url');
				$data['imagem'] = $img_64;
			}
		}else{
			$data['imagem'] = $cliente->imagem;
		}
		
		$cliente->update($data);

		Session::flash('flash_message',[
			'msg'=>"Cliente Atualizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('cliente.index');
	}
	public function excluir($id)
	{
		$cliente = Cliente::find($id);
		$cliente->delete();

		Session::flash('flash_message',[
			'msg'=>"Cadastro do Cliente Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return view('cliente.admin.index');
	}
}
