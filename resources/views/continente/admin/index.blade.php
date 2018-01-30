@extends('layouts.app_admin')
@section('content')

<div class="container">
  <div class="row">
    <h1 class="center">
      Listagem dos Continentes
    </h1>
    <table id="listagem" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
         <!--  <th>Thumb</th>
          <th>Capa</th> -->
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
         <!--  <th>Thumb</th>
          <th>Capa</th> -->
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($continente as $cont)
        <tr>
          <td>{{$cont->nome}}</td>
          <td><p class="show-summary">{{$cont->descricao}}</p></td>
<!--           <td>
            <div class="zoom-gallery" style="display: inline;">
              <a href="{{$cont->thumb}}" data-source="{{$cont->thumb}}" title="THUMB DO CONTINENTE - {{$cont->nome}}" style="width:35px;height:35px;">
                <img class="img_popup" src="{{$cont->thumb}}" width="35" height="35">
              </a>
            </div>
          </td>
          <td>
            <div class="zoom-gallery" style="display: inline;">
              <a href="{{$cont->capa}}" data-source="{{$cont->capa}}" title="CAPA DO CONTINENTE - {{$cont->nome}}" style="width:35px;height:35px;">
                <img class="img_popup" src="{{$cont->capa}}" width="35" height="35">
              </a>
            </div>
          </td> -->
          <td>
            <span class="{{$cont->ativo ? 'on' : 'off'}}">{{$cont->ativo ? 'on' : 'off'}}</span>
            <a href="{{route('continente.mudarEstado',$cont->id)}}" title="" style="margin-top: 2px"><i class="material-icons">swap_horiz</i></a>
          </td>
          <td>
            <a href="{{route('continente.editar',$cont->id)}}" title=""><i class="material-icons">mode_edit</i></a>
            <a href="{{route('continente.excluir',$cont->id)}}" title=""><i class="material-icons">delete</i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection