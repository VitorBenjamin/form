@extends('layouts.app_admin')
@section('content')

<div class="container">
  <div class="row">
    <h1 class="center">
      Listagem dos Carousels
    </h1>
    <table id="listagem" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Imagem</th>
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nome</th>
          <th>Imagem</th>
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($clientes as $cli)
        <tr>
          <td>{{$cli->titulo}}</td>
          <td>
            <div class="zoom-gallery" style="display: inline;">
              <a href="{{$cli->imagem}}" data-source="{{$cli->imagem}}" title="FOTO DE - {{$cli->nome}}" style="width:35px;height:35px;">
                <img class="img_popup" src="{{$cli->imagem}}" alt="{{$cli->alt}}" width="35" height="35">
              </a>
            </div>
          </td>
          <td>
            <span class="{{$cli->ativo ? 'on' : 'off'}}">{{$cli->ativo ? 'on' : 'off'}}</span>
            <a href="{{route('cliente.mudarEstado',$cli->id)}}" title="" style="margin-top: 2px"><i class="material-icons">swap_horiz</i></a>
          </td>
          <td>
            <a href="{{route('cliente.editar',$cli->id)}}" title=""><i class="material-icons">mode_edit</i></a>
            <a href="{{route('cliente.excluir',$cli->id)}}" title=""><i class="material-icons">delete</i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection