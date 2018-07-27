@extends('layouts.app')
@section('content')

@include('layouts.menu_black')

<!-- INCIO SESSÃO TOPO DA VIAGEM -->
<div class="container-fluid" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.35)), url('{{$viagem->capa}}') center center/cover no-repeat;">
  <div class="container height-80 height-100-mobile continente">
    <div class="row height-80 height-100-mobile">
      <div class="col-md-6 d-none d-md-block align-self-center">
        <div class="vertical-menu">
          <p class="p">
            @foreach ($categorias as $cat)
            <a href="{{route('pagina.exibirContinenteCategoria',[mb_strtolower($cont->nome),mb_strtolower($cat->nome)])}}">{{$cat->nome}}</a> 
            <br>
            @endforeach
          </p>
        </div>
        <div style="position:absolute; bottom:20px;">
          <button class="up"><i class="material-icons">keyboard_arrow_up</i></button>
          <button class="down"><i class="material-icons">keyboard_arrow_down</i></button>  
        </div>
      </div>

      <div class="col-12 col-md-6 align-self-center">
        <h1 class="text-right">{{$viagem->titulo}}</h1>
        <div class="row justify-content-end">
          <div class="col-6 col-md-4">
            <select class="destino" style="border: 0; padding: 4px 4px;">
              @foreach ($continentes as $conti)
              <option value="{{route('pagina.exibirContinente',mb_strtolower($conti->nome))}}" {{$cont->nome == $conti->nome ? 'selected' : ''}}>{{$conti->nome}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </div>      
  </div>
</div>
<!-- FIM SESSÃO TOPO DA VIAGEM -->

<section>
  <div class="container" style="margin-top:50px">
    <div class="row justify-content-center">
      <div class="col-md-10 artigo">
        <section class="content">
          @if (count($viagem->imgs) > 0)
          <div id="thumbGallery" class="thumbGallery" data-thumbGallery="true" data-nav_effect="slide_horizontal" data-nav_delay="100" data-nav_timing="1000" data-nav_show="true" data-nav_delay_inverse="1" data-nav_pagination="6" data-gallery_cover="true" data-gallery_effect="slide_horizontal" data-gallery_fullscreenw="90%" data-gallery_fullscreenh="100%">
            @foreach ($viagem->imgs as $img)
            <img src="{{$img->imagem}}" data-highres="{{$img->imagem}}"/>
            @endforeach
          </div>
          @endif
        </section>
        {!!$viagem->descricao!!}
      </div>
    </div>
  </div>
  <div class="container pb-5">
    <div class="row justify-content-center">
      <div class="col-10 col-md-8">
        <form action="{{route('postReserva')}}" method="post" class="form">
          {{ csrf_field() }}
          <input id="viagem" name="viagem" type="hidden" value="{{$viagem->titulo}}" placeholder="Nome" required>
          <input id="nome" class="mb-3" name="nome" type="text" placeholder="Nome" required>
          <input id="email" class="mb-3" name="email" type="email" placeholder="E-mail" required>
          <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
          <input type="text" class="nao-aparece" name="leaveblank">
          <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
          <input type="text" class="nao-aparece" name="dontchange" value="http://">
          {{-- <div class="col-md-3">
            <div>
              <button type="submit" style="margin-top:0; width: 100% !important;">RESERVAR</button>
            </div>
          </div> --}}
          <textarea name="mensagem" id="mensagem" placeholder="Como você gostaria que fosse a sua viagem?" required></textarea>
          <button type="submit">RESERVAR</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- INCIO SESSÃO CATEGORIAS -->
@include('layouts.categorias')
<!-- FIM LISTAGENS CATEGORIAS -->

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