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
          <th>Descrição</th>
          <th>Thumb</th>
          <th>Capa</th>
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Thumb</th>
          <th>Capa</th>
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($viagem as $viagem)
        <tr>
          <td>{{$viagem->titulo}}</td>
          <td><p class="show-summary">{{$viagem->descricao}}</p></td>
          <td>
            <div class="zoom-gallery" style="display: inline;">
              <a href="{{$viagem->thumb}}" data-source="{{$viagem->thumb}}" title="THUMB DA VIAGEM - {{$viagem->nome}}" style="width:35px;height:35px;">
                <img class="img_popup" src="{{$viagem->thumb}}" width="35" height="35">
              </a>
            </div>
          </td>
          <td>
            <div class="zoom-gallery" style="display: inline;">
              <a href="{{$viagem->foto}}" data-source="{{$viagem->foto}}" title="CAPA DA VIAGEM - {{$viagem->nome}}" style="width:35px;height:35px;">
                <img class="img_popup" src="{{$viagem->foto}}" width="35" height="35">
              </a>
            </div>
          </td>
          <td>
            <span class="{{$viagem->ativo ? 'on' : 'off'}}">{{$viagem->ativo ? 'on' : 'off'}}</span>
            <a href="{{route('viagem.mudarEstado',$viagem->id)}}" title="" style="margin-top: 2px"><i class="material-icons">swap_horiz</i></a>
          </td>
          <td>
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