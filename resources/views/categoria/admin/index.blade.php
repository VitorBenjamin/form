@extends('layouts.app_admin')
@section('content')

<div class="container">
  <div class="row">
    <h1 class="center">
      Listagem das Categorias
    </h1>
    <table id="listagem" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <!-- <th>Thumb</th>
          <th>Capa</th> -->
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <!-- <th>Thumb</th>
          <th>Capa</th> -->
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($categoria as $cat)
        <tr>
          <td>{{$cat->nome}}</td>
          <td><p class="show-summary">{{$cat->descricao}}</p></td>
          <!-- <td>
            <div class="zoom-gallery" style="display: inline;">
              <a href="{{$cat->thumb}}" data-source="{{$cat->thumb}}" title="THUMB DA CATEGORIA - {{$cat->nome}}" style="width:35px;height:35px;">
                <img class="img_popup" src="{{$cat->thumb}}" width="35" height="35">
              </a>
            </div>
          </td>
          <td>
            <div class="zoom-gallery" style="display: inline;">
              <a href="{{$cat->capa}}" data-source="{{$cat->capa}}" title="CAPA DA CATEGORIA - {{$cat->nome}}" style="width:35px;height:35px;">
                <img class="img_popup" src="{{$cat->capa}}" width="35" height="35">
              </a>
            </div>
          </td> -->
          <td>
            <span class="{{$cat->ativo ? 'on' : 'off'}}">{{$cat->ativo ? 'on' : 'off'}}</span>
            <a href="{{route('categoria.mudarEstado',$cat->id)}}" title="" style="margin-top: 2px"><i class="material-icons">swap_horiz</i></a>
          </td>
          <td>
            <a href="{{route('categoria.editar',$cat->id)}}" title=""><i class="material-icons">mode_edit</i></a>
            <a href="{{route('categoria.excluir',$cat->id)}}" title=""><i class="material-icons">delete</i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection