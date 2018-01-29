<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Viagem;
use App\Continente;
use App\Categoria;
use Intervention\Image\Facades\Image;

class ViagemController extends Controller
{
	public function index()
	{
		$viagem = Viagem::all();
		return view('viagem.admin.index',compact('viagem'));
	}
	public function editar($id)
	{
		$viagem = Viagem::find($id);
		$categorias = Categoria::all('id','nome');
		$continentes = Continente::all('id','nome');
		return view('viagem.admin.editar',compact('viagem','continentes','categorias'));
	}

	public function create()
	{
		$categoria = Categoria::all('id','nome');
		$continente = Continente::all('id','nome');

		return view('viagem.admin.create',compact('categoria','continente'));
	}
	public function mudarEstado($id)
	{
		$viagem = Viagem::find($id);
		if ($viagem->ativo) {
			$viagem->ativo = false;
			$msg ="Viagem ".$viagem->nome." DESATIVADA Com Sucesso!!!";
		}else{
			$viagem->ativo = true;
			$msg ="Viagem ".$viagem->nome." ATIVADA Com Sucesso!!!";
		}
		$viagem->save();
		Session::flash('flash_message',[
			'msg'=>$msg,
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('viagem.index');
	}

	public function salvar(Request $request)
	{	
		//dd($request->all());
		$mimeFoto = $request->file('foto')->getClientMimeType();
		$mimeThumb = $request->file('thumb')->getClientMimeType();
		$data = [
			'titulo' => $request->titulo,
			'descricao' => $request->descricao ? $request->descricao : null,
			'ativo' => true,
			'categorias_id' => $request->categorias_id,
			'continentes_id' => $request->continentes_id,
		];
		if ($mimeFoto == "image/jpeg" || $mimeFoto == "image/png") {
			$file = Image::make($request->file('foto'));
			$foto_img_64 = (string) $file->encode('data-url');
			$data['foto'] = $foto_img_64;
		}
		if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
			$file = Image::make($request->file('thumb'));
			$thumb_img_64 = (string) $file->encode('data-url');
			$data['thumb'] = $thumb_img_64;
		}
		$viagem = Viagem::create($data);
		Session::flash('flash_message',[
			'msg'=>"Cadastro da Viagem Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('viagem.index');
	}
	public function update(Request $request,$id)
	{	
		$viagem = Viagem::find($id);
		$data = [
			'titulo' => $request->titulo,
			'descricao' => $request->descricao ? $request->descricao : null,
			'categorias_id' => $request->categorias_id,
			'continentes_id' => $request->continentes_id,
		];
		if ($request->file('foto')) {
			$mimeFoto = $request->file('foto')->getClientMimeType();
			if ($mimeFoto == "image/jpeg" || $mimeFoto == "image/png") {
				$file = Image::make($request->file('foto'));
				$foto_img_64 = (string) $file->encode('data-url');
				$data['foto'] = $foto_img_64;
			}
		}else{
			$data['foto'] = $viagem->foto;
		}

		if ($request->file('thumb')) {
			$mimeThumb = $request->file('thumb')->getClientMimeType();
			if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
				$file = Image::make($request->file('thumb'));
				$thumb_img_64 = (string) $file->encode('data-url');
				$data['thumb'] = $thumb_img_64;
			}
		}else{
			$data['thumb'] = $viagem->thumb;
		}

		$viagem->update($data);

		Session::flash('flash_message',[
			'msg'=>"Cadastro do Viagem Atualizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('viagem.index');
	}
	public function excluir($id)
	{
		$viagem = Viagem::find($id);
		$viagem->delete();

		Session::flash('flash_message',[
			'msg'=>"Cadastro do Viagem Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return view('viagem.admin.admin_index');
	}
}