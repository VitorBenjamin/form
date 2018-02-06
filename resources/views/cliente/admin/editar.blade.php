@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			Atuliazação do Cliente 
		</h1>
		<div class="center">
			<button type="button" class="btn btn-success submit">ATUALIZAR</button>	
		</div>
		
		<form action="{{ route('cliente.update',$cliente->id)}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT')}}
			<div class="form-group t">
				<input id="nome" name="nome" type="text" class="form-control" value="{{$cliente->nome}}" required>
				<label for="nome">Nome do Cliente</label>
			</div>
			<div class="form-group t">
				<input id="title" name="title" class="form-control" value="{{$cliente->title}}" required>
				<label for="title">Title (SEO)</label>
			</div>
			<div class="form-group t">
				<input id="alt" name="alt" class="form-control" value="{{$cliente->alt}}" required>
				<label for="alt">Alt (SEO)</label>
			</div>
			<div class="form-group">
				<b>Enviar Imagem</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png)  <input type="file" id="imgInp2" name="imagem" accept="image/jpeg, image/png">
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id="img-upload" class="img-upload" src="{{$cliente->imagem}}" />
			</div>
			<button type="submit" class="enviar hidden"></button>
		</form>
	</div>
</div>
@endsection