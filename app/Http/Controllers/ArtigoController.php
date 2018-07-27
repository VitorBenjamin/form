<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use App\Artigo;

class ArtigoController extends Controller
{
	public function index()
	{
		$artigo = Artigo::all('id','titulo','descricao','ativo');
		return view('artigo.admin.index',compact('artigo'));
	}
	public function editar($id)
	{
		$artigo = Artigo::find($id);
		return view('artigo.admin.editar',compact('artigo'));
	}

	public function create()
	{
		return view('artigo.admin.create');
	}
	
	public function mudarEstado($id)
	{
		$artigo = Artigo::find($id);
		if ($artigo->ativo) {
			$artigo->ativo = false;
			$msg ="Artigo ".$artigo->titulo." DESATIVADO Com Sucesso!!!";
		}else{
			$artigo->ativo = true;
			$msg ="Artigo ".$artigo->titulo." ATIVADO Com Sucesso!!!";
		}
		$artigo->save();
		Session::flash('flash_message',[
			'msg'=>$msg,
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('artigo.index');
	}

	public function salvar(Request $request)
	{	
		$mimeCapa = $request->file('capa')->getClientMimeType();
		$mimeThumb = $request->file('thumb')->getClientMimeType();
		$data = [
			'titulo' => $request->titulo,
			'descricao' => $request->descricao ? $request->descricao : null,
			'resumo' => $request->resumo,
			'ativo' => true,
			'title_thumb' => $request->title_thumb, 
			'alt_thumb' => $request->alt_thumb, 
			'title_capa' => $request->title_capa, 
			'alt_capa' => $request->alt_capa, 
		];
		if ($mimeCapa == "image/jpeg" || $mimeCapa == "image/png") {
			$file = Image::make($request->file('capa'));
			$capa_img_64 = (string) $file->encode('data-url');
			$data['capa'] = $capa_img_64;
		}
		if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
			$file = Image::make($request->file('thumb'));
			$thumb_img_64 = (string) $file->encode('data-url');
			$data['thumb'] = $thumb_img_64;
		}
		$artigo = Artigo::create($data);
		
		Session::flash('flash_message',[
			'msg'=>"Cadastro do artigo Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('artigo.index');
	}
	public function update(Request $request,$id)
	{	
		$artigo = Artigo::find($id);
		$data = [
			'titulo' => $request->titulo,
			'resumo' => $request->resumo,
			'descricao' => $request->descricao ? $request->descricao : null,
		];
		if ($request->file('capa')) {
			$mimeCapa = $request->file('capa')->getClientMimeType();
			if ($mimeCapa == "image/jpeg" || $mimeCapa == "image/png") {
				$file = Image::make($request->file('capa'));
				$capa_img_64 = (string) $file->encode('data-url');
				$data['capa'] = $capa_img_64;
			}
		}else{
			$data['capa'] = $artigo->capa;
		}
		if ($request->file('thumb')) {
			$mimeThumb = $request->file('thumb')->getClientMimeType();
			if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
				$file = Image::make($request->file('thumb'));
				$thumb_img_64 = (string) $file->encode('data-url');
				$data['thumb'] = $thumb_img_64;
			}
		}else{
			$data['thumb'] = $artigo->thumb;
		}
		$artigo->update($data);

		Session::flash('flash_message',[
			'msg'=>"Cadastro do artigo Atualizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('artigo.index');
	}
	public function excluir($id)
	{
		$artigo = Artigo::find($id);
		$artigo->delete();

		Session::flash('flash_message',[
			'msg'=>"Cadastro do artigo Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('artigo.index');
	}
}