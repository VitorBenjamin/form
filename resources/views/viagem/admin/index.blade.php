@extends('layouts.app_admin')
@section('content')

<div class="container">
  <div class="row">
    <h1 class="center">
      Listagem das Viagens
    </h1>
    <table id="listagem" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Continente</th>
          <th>Categoria</th>
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nome</th>
          <th>Continente</th>
          <th>Categoria</th>
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($viagem as $viagem)
        <tr>
          <td>{{$viagem->titulo}}</td>
          <td>{{$viagem->continente->nome}}</td>
          <td>{{$viagem->categoria->nome}}</td>
          <td>
            <span class="{{$viagem->ativo ? 'on' : 'off'}}">{{$viagem->ativo ? 'on' : 'off'}}</span>
            <a href="{{route('viagem.mudarEstado',$viagem->id)}}" title="" style="margin-top: 2px"><i class="material-icons">swap_horiz</i></a>
          </td>
          <td>
            <a href="{{route('carousel.create',$viagem->id)}}" title=""><i class="material-icons">view_carousel</i></a>
            <a href="{{route('viagem.exibirGaleria',$viagem->id)}}" title=""><i class="material-icons">burst_mode</i></a>
            <a href="{{route('viagem.editar',$viagem->id)}}" title=""><i class="material-icons">mode_edit</i></a>
            <a href="{{route('viagem.excluir',$viagem->id)}}" title=""><i class="material-icons">delete</i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection