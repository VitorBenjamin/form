@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<h1 class="center">
			Area da Galeria
		</h1>
		<div class="col-md-offset-2 col-md-8">
			<table class="table">
				<thead>
					<tr>
						<th>IMAGEM</th>
						<th>AÇÃO</th>
					</tr>
				</thead>
				<tbody>
					@foreach($galeria as $img)
					<tr>
						<td><img src="{{$img->imagem}}" alt="" width="125" height="50"></td>
						<td>
							<span class="{{$img->ativo ? 'on' : 'off'}}">{{$img->ativo ? 'on' : 'off'}}</span>
							<a href="{{route('viagem.mudarEstadoGaleria',$img->id)}}" title="" style="margin-top: 2px"><i class="material-icons">swap_horiz</i></a>
							<a href="{{route('viagem.deletarImgGaleria',$img->id)}}" title=""><i class="material-icons">delete</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="row justify-content-center">
		<form action="{{ route('viagem.salvarGaleria')}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="input-group control-group increment" >
				<input type="hidden" name="viagem" value="{{$viagemId}}">
				<div class="row">
					<div class="col-sm-6">
						<b>Título Para a Imagem</b>
						<input name="title[]" type="text" class="form-control" style="width:100%"/>
					</div>
					<div class="col-sm-6">
						<b>Alt Para a Imagem</b>
						<input name="alt[]" type="text" class="form-control" style="width:100%"/>
					</div>
				</div>
				<input type="file" name="galeria[]" class="form-control">
				<div class="input-group-btn" style="vertical-align:bottom !important"> 
					<button class="btn btn-success add" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
				</div>
			</div>
			<div class="dinamico">
			</div>
			<div class="center" style="margin:50px 0">
				<button type="button" class="btn btn-success submit">CADASTRAR VIAGEM</button>
			</div>
			<button type="submit" class="enviar hidden"></button>
		</form>
	</div>
</div>
@endsection