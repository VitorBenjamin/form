@extends('layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">
			Cadastro de Dica
		</h1>
		<div class="center">
			<button type="button" class="btn btn-success submit">CADASTRAR</button>	
		</div>
		
		<form action="{{ route('dica.salvar')}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group t">
				<select name="tipo">
					<option value="CHECK-IN">CHECK-IN</option>
					<option value="DICAS-VIAGENS">DICAS de VIAGENS</option>
				</select>
			</div>
			<div class="form-group t">
				<input id="nome" name="nome" type="text" class="form-control" required>
				<label for="nome">Titulo da Dica</label>
			</div>
			<div class="form-group">
				<textarea id="bodyField" name="descricao" required></textarea>

				@ckeditor('bodyField',[
					'image2_disableResizer' => false,
					'image2_prefillDimensions' => false,
					'height' => 700,
					'language' => 'pt-br',
					])
			</div>
			<button type="submit" class="enviar hidden"></button>
		</form>
	</div>
</div>
@endsection