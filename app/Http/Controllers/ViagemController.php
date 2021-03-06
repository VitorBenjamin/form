<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Viagem;
use App\Continente;
use App\Categoria;
use App\Img;
use Intervention\Image\Facades\Image;

class ViagemController extends Controller
{
	public function index()
	{
		$viagem = Viagem::all('id','titulo','descricao','ativo','continentes_id','categorias_id');
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
		$mimeCapa = $request->file('capa')->getClientMimeType();
		$mimeThumb = $request->file('thumb')->getClientMimeType();
		$data = [
			'titulo' => $request->titulo,
			'descricao' => $request->descricao ? $request->descricao : null,
			'destino' => $request->destino,
			'ativo' => true,
			'categorias_id' => $request->categorias_id,
			'continentes_id' => $request->continentes_id,
			'title_thumb' => $request->title_thumb, 
			'alt_thumb' => $request->alt_thumb, 
			'title_capa' => $request->title_capa, 
			'especial' => $request->especial == null ? 0 : $request->especial,
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
		$viagem = Viagem::create($data);
		if ($request->file('galeria')) {
			foreach ($request->file('galeria') as $key => $value) {

				$img = [
					'titulo' => $request->title[$key],
					'alt' => $request->alt[$key],
					'viagens_id' => $viagem->id
				];
				$mimeImg = $value->getClientMimeType();
				if ($mimeImg == "image/jpeg" || $mimeImg == "image/png") {
					$file = Image::make($value);
					$foto_img_64 = (string) $file->encode('data-url');
					$img['imagem'] = $foto_img_64;
				}
				$img = Img::create($img);
			}
		}
		Session::flash('flash_message',[
			'msg'=>"Cadastro da Viagem Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('viagem.index');
	}
	
	public function salvarGaleria(Request $request)
	{	

		//dd($request->all());
		if ($request->file('galeria')) {
			foreach ($request->file('galeria') as $key => $value) {

				$img = [
					'titulo' => $request->title[$key],
					'alt' => $request->alt[$key],
					'ativo' => true,
					'viagens_id' => $request->viagem
				];
				$mimeImg = $value->getClientMimeType();
				if ($mimeImg == "image/jpeg" || $mimeImg == "image/png") {
					$file = Image::make($value);
					$foto_img_64 = (string) $file->encode('data-url');
					$img['imagem'] = $foto_img_64;
				}
				$img = Img::create($img);
			}
		}
		Session::flash('flash_message',[
			'msg'=>"Cadastro da Galeria Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->back();
	}
	public function mudarEstadoGaleria($id)
	{
		$img = Img::find($id);
		if ($img->ativo) {
			$img->ativo = false;
			$msg ="img ".$img->nome." DESATIVADA Com Sucesso!!!";
		}else{
			$img->ativo = true;
			$msg ="img ".$img->nome." ATIVADA Com Sucesso!!!";
		}
		$img->save();
		Session::flash('flash_message',[
			'msg'=>$msg,
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->back();
	}

	public function exibirGaleria($id){

		$viagemId = $id;
		$galeria = Img::where('viagens_id',$id)->get();

		return view('viagem.admin.galeria',compact('viagemId','galeria'));
	}

	public function deletarImgGaleria($id)
	{
		$img = Img::find($id);
		$img->delete();
		Session::flash('flash_message',[
			'msg'=>"Imagem Removida com Sucesso",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->back();
	}

	public function update(Request $request,$id)
	{	
		$viagem = Viagem::find($id);
		$data = [
			'titulo' => $request->titulo,
			'destino' => $request->destino,
			'descricao' => $request->descricao ? $request->descricao : null,
			'categorias_id' => $request->categorias_id,
			'continentes_id' => $request->continentes_id,
			'especial' => $request->especial == null ? 0 : $request->especial,

		];
		if ($request->file('capa')) {
			$mimeCapa = $request->file('capa')->getClientMimeType();
			if ($mimeCapa == "image/jpeg" || $mimeCapa == "image/png") {
				$file = Image::make($request->file('capa'));
				$capa_img_64 = (string) $file->encode('data-url');
				$data['capa'] = $capa_img_64;
			}
		}else{
			$data['capa'] = $viagem->capa;
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
		return redirect()->route('viagem.index');
	}
}