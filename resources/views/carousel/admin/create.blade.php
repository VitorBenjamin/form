@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			Cadastro do Destaque
		</h1>
		<div class="center">
			<button type="button" class="btn btn-success submit">CADASTRAR</button>	
		</div>
		
		<form action="{{ route('carousel.salvar')}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="viagem_id" value="{{$viagem_id}}">
			<div class="form-group t">
				<input id="nome" name="nome" type="text" class="form-control" required>
				<label for="nome">Nome do Produto</label>
			</div>
			<div class="form-group t">
				<textarea id="descricao" name="descricao" class="form-control" required></textarea>
				<label for="descricao">Descrição</label>
			</div>
			<div class="form-group">
				<b>Enviar Imagem</b>
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Carregar… (jpg/png)  <input type="file" id="imgInp2" name="imagem" accept="image/jpeg, image/png" required>
						</span>
					</span>
					<input type="text" class="form-control" readonly>
				</div>
				<img id="img-upload" class="img-upload" />
			</div>
			<button type="submit" class="enviar hidden"></button>
		</form>
	</div>
</div>
@endsection