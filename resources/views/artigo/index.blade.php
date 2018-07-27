@extends('layouts.app')
@section('content')

@include('layouts.menu_black')

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
<div class="container-fluid" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.35)), url('{{$artigo->capa}}') center center/cover no-repeat;">
  <div class="container height-80 height-100-mobile continente">
    <div class="row justify-content-center height-80 height-100-mobile">
      <div class="col-md-6 align-self-center artigo text-center">
        <h1>{!!$artigo->titulo!!}</h1>
      </div>
    </div>      
  </div>
</div>
<!-- FIM SESSÃO TOPO DA VIAGEM -->

<section>
  <div class="container" style="margin-top:50px">
    <div class="row justify-content-center">
      <div class="col-md-10 artigo">
        {!!$artigo->descricao!!}
      </div>
    </div>
  </div>
</section>

<!-- INCIO SESSÃO NEWS LATTER -->
@include('layouts.newslatter')
<!-- FIM SESSÃO NEWS LATTER -->

<!-- INCIO SESSÃO CLIENTES -->
@include('layouts.clientes')
<!-- FINAL SESSÃO CLIENTES -->

<!-- INCIO SESSÃO CLIENTES -->
<section id="contato">
  @include('layouts.footer_sem_form')
</section>

@endsection