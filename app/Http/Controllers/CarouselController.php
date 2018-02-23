<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Carousel;
use App\Viagem;
use Intervention\Image\Facades\Image;
class CarouselController extends Controller
{
	public function index()
	{
		// $carousels = Carousel::all('id','titulo','descricao','ativo');

		// $carousels = Carousel::with(['viagem' => function ($q)
		// {
		// 	$q->select('titulo')->get();
		// }])->get();
		$carousels = Carousel::with('viagem')->get();
		//dd($carousels);
		return view('carousel.admin.index',compact('carousels'));
	}
	public function create($id)
	{
		$viagem_id = $id;
		$viagem = Viagem::find($id);
		//dd(count($viagem->carousel));
		if (count($viagem->carousel) == 0) {
			return view('carousel.admin.create',compact('viagem_id'));
		} else {
			//dd($viagem->carousel[0]->id);
			$msg ="Corousel Já cadastrado para a Viagem ".$viagem->titulo;
			Session::flash('flash_message',[
				'msg'=>$msg,
				'class'=>"alert alert-warning alert-dismissible"
			]);
			$carousel = $viagem->carousel[0];
			return view('carousel.admin.editar',compact('carousel'));
		}
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
			$msg ="Carousel ".$carousel->titulo." DESATIVADO com Sucesso!!!";
		}else{
			$carousel->ativo = true;
			$msg ="Carousel ".$carousel->titulo." ATIVADO com Sucesso!!!";
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
		$mimeImagem = $request->file('imagem')->getClientMimeType();
		//dd($request->all());
		$data = [
			'nome' => $request->nome,
			'descricao' => $request->descricao ? $request->descricao : null,
			'ativo' => true,
			'viagens_id' => $request->viagem_id,
		];
		if ($mimeImagem == "image/jpeg" || $mimeImagem == "image/png") {
			$file = Image::make($request->file('imagem'));
			$imagem_img_64 = (string) $file->encode('data-url');
			$data['imagem'] = $imagem_img_64;
		}
		$carousel = Carousel::create($data);
		Session::flash('flash_message',[
			'msg'=>"Cadastro do Carousel Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('carousel.index');
	}
	public function update(Request $request,$id)
	{	
		$carousel = Carousel::find($id);
		$data = [
			'nome' => $request->nome,
			'descricao' => $request->descricao ? $request->descricao : null,
			'ativo' => $carousel->ativo,
			'viagens_id' => $carousel->viagens_id,
		];
		if ($request->file('imagem')) {
			$mimeImagem = $request->file('imagem')->getClientMimeType();
			if ($mimeImagem == "image/jpeg" || $mimeImagem == "image/png") {
				$file = Image::make($request->file('imagem'));
				$imagem_img_64 = (string) $file->encode('data-url');
				$data['imagem'] = $imagem_img_64;
			}
		}else{
			$data['imagem'] = $carousel->imagem;
		}
		
		$carousel->update($data);

		Session::flash('flash_message',[
			'msg'=>"Carousel Atualizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('carousel.index');
	}
	public function excluir($id)
	{
		$carousel = Carousel::find($id);
		$carousel->delete();

		Session::flash('flash_message',[
			'msg'=>"Carousel Excluido com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('carousel.index');
	}
}
