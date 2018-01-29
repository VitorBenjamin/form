<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Carousel;
use Intervention\Image\Facades\Image;
class CarouselController extends Controller
{
	public function index()
	{
		$carousel = Carousel::all();
		return view('carousel.admin.index',compact('carousel'));
	}
	public function create()
	{
		return view('carousel.admin.create');
	}

	public function editar($id)
	{
		$carousel = Carousel::find($id);
		return view('carousel.admin.editar',compact('carousel'));
	}
	public function mudarEstado($id)
	{
		$carousel = Carousel::find($id);
		if ($carousel->ativo) {
			$carousel->ativo = false;
			$msg ="Carousel ".$carousel->nome." DESATIVADO com Sucesso!!!";
		}else{
			$carousel->ativo = true;
			$msg ="Carousel ".$carousel->nome." ATIVADA com Sucesso!!!";
		}
		$carousel->save();
		Session::flash('flash_message',[
			'msg'=>$msg,
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('carousel.index');
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
		$carousel = Carousel::create($data);
		Session::flash('flash_message',[
			'msg'=>"Cadastro da Carousel Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('carousel.create');
	}
	public function update(Request $request,$id)
	{	
		$carousel = Carousel::find($id);
		$data = [
			'nome' => $request->nome,
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
			$data['capa'] = $carousel->capa;
		}
		
		if ($request->file('thumb')) {
			$mimeThumb = $request->file('thumb')->getClientMimeType();
			if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
				$file = Image::make($request->file('thumb'));
				$thumb_img_64 = (string) $file->encode('data-url');
				$data['thumb'] = $thumb_img_64;
			}
		}else{
			$data['thumb'] = $carousel->thumb;
		}
		
		$carousel->update($data);

		Session::flash('flash_message',[
			'msg'=>"Carousel Atualizada com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('carousel.index');
	}
	public function excluir($id)
	{
		$carousel = Carousel::find($id);
		$carousel->delete();

		Session::flash('flash_message',[
			'msg'=>"Cadastro da Carousel Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return view('categoria.admin.index');
	}
}
