<!-- Modal -->
@foreach ($check as $ch)
<div class="modal fade" id="{{$ch->id}}{{$ch->nome}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Check IN</h4>
      </div>
      <div class="modal-body artigo">
        {!!$ch->descricao!!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
@endforeach

<!-- Dicas de Viagens -->
@foreach ($dicas as $d)
<div class="modal fade" id="{{$d->id}}{{$d->nome}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Dicas de Viagem</h4>
      </div>
      <div class="modal-body artigo">
        {!!$d->descricao!!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
@endforeach


