@extends('layouts.app_admin')
@section('content')

<div class="container">
  <div class="row">
    <h1 class="center">
      Listagem dos Parceiros
    </h1>
    <table id="listagem" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nome</th>
          <th>Estado</th>
          <th>Ações</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($parceiros as $par)
        <tr>
          <td>{{$par->nome}}</td>
          <td>
            <span class="{{$par->ativo ? 'on' : 'off'}}">{{$par->ativo ? 'on' : 'off'}}</span>
            <a href="{{route('parceiro.mudarEstado',$par->id)}}" title="" style="margin-top: 2px"><i class="material-icons">swap_horiz</i></a>
          </td>
          <td>
            <a href="{{route('parceiro.editar',$par->id)}}" title=""><i class="material-icons">mode_edit</i></a>
            <a href="{{route('parceiro.excluir',$par->id)}}" title=""><i class="material-icons">delete</i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection