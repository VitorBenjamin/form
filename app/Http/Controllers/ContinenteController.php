<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Continente;
use Intervention\Image\Facades\Image;

class ContinenteController extends Controller
{
	public function index()
	{
		$continente = Continente::all();
		return view('continente.admin.index',compact('continente'));
	}
	public function editar($id)
	{
		$continente = Continente::find($id);
		return view('continente.admin.editar',compact('continente'));
	}

	public function create()
	{
		return view('continente.admin.create');
	}

	public function salvar(Request $request)
	{ 
		$mimeCapa = $request->file('capa')->getClientMimeType();
		$mimeThumb = $request->file('thumb')->getClientMimeType();
		$data = [
			'nome' => $request->nome,
			'descricao' => $request->descricao ? $request->descricao : null,
		];
		if ($mimeCapa == "image/jpeg" || $mimeCapa == "image/png") {
			$file = Image::make($request->file('capa'));
			$capa_img_64 = (string) $file->encode('data-url');
			$data['capa'] = $capa_img_64;
		}
		if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
			$file = Image::make($request->file('capa'));
			$thumb_img_64 = (string) $file->encode('data-url');
			$data['thumb'] = $thumb_img_64;
		}
		$continente = Continente::create($data);
		Session::flash('flash_message',[
			'msg'=>"Cadastro do Continente Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('continente.create');
	}
	public function update(Request $request,$id)
	{	
		$continente = Continente::find($id);
		$mimeCapa = $request->file('capa')->getClientMimeType();
		$mimeThumb = $request->file('thumb')->getClientMimeType();
		$data = ['nome' => $request->nome];
		if ($request->file('capa')) {
			if ($mimeCapa == "image/jpeg" || $mimeCapa == "image/png") {
				$file = Image::make($request->file('capa'));
				$capa_img_64 = (string) $file->encode('data-url');
				$data['capa'] = $capa_img_64;
			}
		}else{
			$data['capa'] = $continente->capa;
		}
		
		if ($request->file('thumb')) {
			if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
				$file = Image::make($request->file('thumb'));
				$thumb_img_64 = (string) $file->encode('data-url');
				$data['thumb'] = $thumb_img_64;
			}
		}else{
			$data['thumb'] = $continente->thumb;
		}
		
		$continente->update($data);

		Session::flash('flash_message',[
			'msg'=>"Cadastro do Continente Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('continente.admin.admin_index');
	}
	public function excluir($id)
	{
		$continente = Continente::find($id);
		$continente->delete();

		Session::flash('flash_message',[
			'msg'=>"Cadastro do Continente Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return view('continente.admin.index');
	}
}
