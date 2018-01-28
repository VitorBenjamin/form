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
        @foreach ($categoria as $cat)
        <tr>
          <td>{{$cat->nome}}</td>
          <td>{{$cat->descricao}}</td>
          <td>
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
          </td>
          <td >asdasdsadsa</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection