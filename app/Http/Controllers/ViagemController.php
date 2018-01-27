<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Viagem;
use Intervention\Image\Facades\Image;

class ViagemController extends Controller
{

	public function index()
	{
		$viagem = Viagem::all();
		return view('viagem.index_admin',compact('viagem'));
	}
	public function editar($id)
	{
		$viagem = Viagem::find($id);
		return view('viagem.editar',compact('viagem'));
	}

	public function create()
	{
		return view('viagem.create');
	}

	public function salvar(Request $request)
	{	
		dd($request->all());
		$mimeCapa = $request->file('capa')->getClientMimeType();
		$mimeThumb = $request->file('thumb')->getClientMimeType();
		$data = ['nome' => $request->nome];
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
		$viagem = Viagem::create($data);
		Session::flash('flash_message',[
			'msg'=>"Cadastro do Viagem Realizado com Sucesso!!!",
			'class'=>"alert bg-green alert-dismissible"
		]);
		return redirect()->route('viagem.admin_index');
	}
	public function update(Request $request,$id)
	{	
		$viagem = Viagem::find($id);
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
			$data['capa'] = $viagem->capa;
		}

		if ($request->file('thumb')) {
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
			'msg'=>"Cadastro do Viagem Realizado com Sucesso!!!",
			'class'=>"alert bg-green alert-dismissible"
		]);
		return redirect()->route('viagem.admin_index');
	}
	public function excluir($id)
	{
		$viagem = Viagem::find($id);
		$viagem->delete();

		Session::flash('flash_message',[
			'msg'=>"Cadastro do Viagem Realizado com Sucesso!!!",
			'class'=>"alert bg-green alert-dismissible"
		]);
		return view('viagem.admin_index');
	}
}