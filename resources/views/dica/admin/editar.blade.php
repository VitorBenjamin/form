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
		
		<form action="{{ route('dica.update',$dica->id)}}" class="col-md-offset-2 col-md-8 go-right form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT')}}
			<div class="form-group t">
				<select name="tipo">
					<option value="CHECK-IN" {{$dica->tipo == 'CHECK-IN' ? 'selected' : ''}}>CHECK-IN</option>
					<option value="DICAS-VIAGENS" {{$dica->tipo == 'DICAS-VIAGENS' ? 'selected' : ''}}>DICAS de VIAGENS</option>
				</select>
			</div>
			<div class="form-group t">
				<input id="nome" name="nome" type="text" class="form-control" value="{{$dica->nome}}" required>
				<label for="nome">Titulo da Dica</label>
			</div>
			<div class="form-group">
				<textarea id="bodyField" name="descricao" required>{{$dica->descricao}}</textarea>

				@ckeditor('bodyField',[
					'image2_disableResizer' => true,
					'image2_prefillDimensions' => true,
					'height' => 600,
					'language' => 'pt-br'
					])
			</div>
			<button type="submit" class="enviar hidden"></button>
		</form>
	</div>
</div>
@endsection