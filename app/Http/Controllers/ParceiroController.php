<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Parceiro;
use Intervention\Image\Facades\Image;
class ParceiroController extends Controller
{
	public function index()
	{
		$parceiros = Parceiro::all('id','nome','ativo');
		return view('parceiro.admin.index',compact('parceiros'));
	}
	public function create()
	{
		return view('parceiro.admin.create');
	}

	public function editar($id)
	{
		$parceiro = Parceiro::find($id);
		return view('parceiro.admin.editar',compact('parceiro'));
	}
	public function mudarEstado($id)
	{
		$parceiro = Parceiro::find($id);
		if ($parceiro->ativo) {
			$parceiro->ativo = false;
			$msg ="parceiro ".$parceiro->nome." DESATIVADO com Sucesso!!!";
		}else{
			$parceiro->ativo = true;
			$msg ="Parceiro parceiro ".$parceiro->nome." ATIVADO com Sucesso!!!";
		}
		$parceiro->save();
		Session::flash('flash_message',[
			'msg'=>$msg,
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('parceiro.index');
	}

	public function salvar(Request $request)
	{	
		$mimeThumb = $request->file('thumb')->getClientMimeType();
		$data = [
			'nome' => $request->nome,
		];
		if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
			$file = Image::make($request->file('thumb'));
			$thumb_img_64 = (string) $file->encode('data-url');
			$data['thumb'] = $thumb_img_64;
		}
		$parceiro = Parceiro::create($data);
		Session::flash('flash_message',[
			'msg'=>"Cadastro do Parceiro Realizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('parceiro.create');
	}
	public function update(Request $request,$id)
	{	
		$parceiro = Parceiro::find($id);
		$data = [
			'nome' => $request->nome,
		];
		if ($request->file('thumb')) {
			$mimeThumb = $request->file('thumb')->getClientMimeType();
			if ($mimeThumb == "image/jpeg" || $mimeThumb == "image/png") {
				$file = Image::make($request->file('thumb'));
				$thumb_img_64 = (string) $file->encode('data-url');
				$data['thumb'] = $thumb_img_64;
			}
		}else{
			$data['thumb'] = $parceiro->thumb;
		}
		
		$parceiro->update($data);

		Session::flash('flash_message',[
			'msg'=>"Parceiro Atualizado com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('parceiro.index');
	}
	public function excluir($id)
	{
		$parceiro = Parceiro::find($id);
		$parceiro->delete();

		Session::flash('flash_message',[
			'msg'=>"Exclusão Realizada com Sucesso!!!",
			'class'=>"alert alert-success alert-dismissible"
		]);
		return redirect()->route('parceiro.index');
	}
}
