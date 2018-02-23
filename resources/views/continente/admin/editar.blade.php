@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			Edição Continente {{$continente->nome}}
		</h1>
		<div class="center">
			<button type="button" class="btn btn-success submit">EDITAR CONTINENTE</button>	
		</div>
		
		<form action="{{ route('continente.update',$continente->id)}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group t">
				<input id="nome" name="nome" value="{{$continente->nome}}" type="text" class="form-control" required>
				<label for="nome">Título da Continente</label>
			</div>
			<div class="form-group t">
				<textarea id="descricao" name="descricao" class="form-control" rows="5" required>{{$continente->descricao}}</textarea>
				<label for="descricao">Descrição</label>
			</div>
			<div class="form-group">
				<b>Miniatura para Busca</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png) <input type="file" id="imgInp" name="thumb" accept="image/jpeg, image/png" required>
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id='img-upload' src="{{$continente->thumb}}" />
			</div>
			<div class="form-group">
				<b>Capa para a Continente</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png) <input type="file" id="imgInp2" name="capa" accept="image/jpeg, image/png">
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id="img-upload" class="img-upload" src="{{$continente->capa}}" />
			</div>
			<button type="submit" class="enviar hidden"></button>
		</form>
	</div>
</div>
@endsection