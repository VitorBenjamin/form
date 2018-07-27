@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			EDITANDO A PARCEIRO {{$parceiro->nome}}
		</h1>
		<div class="center">
			<button type="button" class="btn btn-success submit">EDITAR PARCEIRO</button>	
		</div>
		
		<form action="{{ route('parceiro.update',$parceiro->id)}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group t">
				<input id="nome" name="nome" value="{{$parceiro->nome}}" type="text" class="form-control" required>
				<label for="nome">Nome do Parceiro</label>
			</div>
			<div class="form-group">
				<b>Logo	</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png) <input type="file" id="imgInp" name="thumb" accept="image/jpeg, image/png">
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id='img-upload' src="{{$parceiro->thumb}}" />
			</div>
			<button type="submit" class="enviar hidden"></button>
		</form>
	</div>
</div>
@endsection