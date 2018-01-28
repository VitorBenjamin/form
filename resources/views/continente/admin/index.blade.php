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
        @foreach ($continente as $cont)
        <tr>
          <td>{{$cont->nome}}</td>
          <td>{{$cont->descricao}}</td>
          <td>
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
          </td>
          <td >asdasdsadsa</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection