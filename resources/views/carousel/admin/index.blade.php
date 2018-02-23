@extends('layouts.app_admin')
@section('content')

<div class="container">
  <div class="row">
    <h1 class="center">
      Listagem dos Destaques
    </h1>
    <table id="listagem" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Titulo</th>
          <th>Descrição</th>
          <th>Estado</th>
          <th>Viagem</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Titulo</th>
          <th>Descrição</th>
          <th>Estado</th>
          <th>Viagem</th>
          <th>Ações</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($carousels as $car)
        <tr>
          <td>{{$car->titulo}}</td>
          <td><p class="show-summary">{{$car->descricao}}</p></td>
          <td>
            <span class="{{$car->ativo ? 'on' : 'off'}}">{{$car->ativo ? 'on' : 'off'}}</span>
            <a href="{{route('carousel.mudarEstado',$car->id)}}" title="" style="margin-top: 2px"><i class="material-icons">swap_horiz</i></a>
          </td>
          <td>{{$car->viagem->titulo}}</td>
          <td>
            <a href="{{route('carousel.editar',$car->id)}}" title=""><i class="material-icons">mode_edit</i></a>
            <a href="{{route('carousel.excluir',$car->id)}}" title=""><i class="material-icons">delete</i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection