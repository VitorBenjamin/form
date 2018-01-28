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
          <th>Ações</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Thumb</th>
          <th>Capa</th>
          <th>Ações</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($viagem as $viagem)
        <tr>
          <td>{{$viagem->titulo}}</td>
          <td>{{$viagem->descricao}}</td>
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
          <td>asdasdsadsa</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection