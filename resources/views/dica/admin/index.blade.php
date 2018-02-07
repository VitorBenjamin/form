@extends('layouts.app_admin')
@section('content')

<div class="container">
  <div class="row">
    <h1 class="center">
      Listagem das Dicas
    </h1>
    <table id="listagem" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Título</th>
          <th>Tipo</th>
          <th>Descrição</th>
          {{-- <th>Estado</th> --}}
          <th>Ações</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Título</th>
          <th>Tipo</th>
          <th>Descrição</th>
          {{-- <th>Estado</th> --}}
          <th>Ações</th>
        </tr>
      </tfoot>
      <tbody>
        @foreach ($dicas as $dica)
        <tr>
          <td>{{$dica->nome}}</td>
          <td>{{$dica->tipo}}</td>
          {{-- <td>{!!$dica->descricao!!}</td> --}}
          <td>
            <span class="{{$dica->ativo ? 'on' : 'off'}}">{{$dica->ativo ? 'on' : 'off'}}</span>
            <a href="{{route('dica.mudarEstado', $dica->id)}}" title="" style="margin-top: 2px"><i class="material-icons">swap_horiz</i></a>
          </td>
          <td>
            <a href="{{route('dica.editar',$dica->id)}}" title=""><i class="material-icons">mode_edit</i></a>
            <a href="{{route('dica.excluir',$dica->id)}}" title=""><i class="material-icons">delete</i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection