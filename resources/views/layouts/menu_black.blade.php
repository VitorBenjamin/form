<nav class="navbar navbar-expand-md menu-topo mt-4">
  <div class="container">
    <a class="navbar-brand" href="{{route('pagina.index')}}">
      <img src="{{ asset('assets/logo-formula-turismo-branca.png') }}" alt="" width="200" class="img-fluid menu-scroll-img">
    </a>
    <button class="navbar-toggler custom-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-principal" aria-controls="navbar-principal" aria-expanded="false" aria-label="Toggle navigation">
      <span> </span>
      <span> </span>
      <span> </span>
    </button>
    <div class="justify-content-end collapse navbar-collapse text-center" id="navbar-principal">
      <ul class="navbar-nav">
        <li class="nav-item mx-lg-1 active">
          <a class="nav-link" href="{{route('pagina.index')}}"><img src="{{asset('assets/icon-menu_home.png')}}" alt="" width="30">INÍCIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-lg-1">
          <a class="nav-link" href="#quemsomos"><img src="{{asset('assets/icon-menu_quemsomos.png')}}" alt="" width="30">QUEM SOMOS</a>
        </li>
        <li class="nav-item mx-lg-1 dropdown text-center">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="assets/icon-quemsomos.svg" alt="" width="30" class="svg">
            <span> 
              <img src="{{asset('assets/icon-menu_viagem.png')}}" alt="" width="30">VIAGENS
            </span>
          </a>
          <div class="dropdown-menu text-center" style="background-color: #161b33; margin-top: 0;">
            <a class="dropdown-item" href="{{Request::is('/') ? '#destinos' : route('pagina.index').'#destinos'}}" style="border-bottom: 2px #00000000 solid;"><img src="{{asset('assets/icon-menu_destino.png')}}" alt="" width="30">DESTINOS</a>
            <a class="dropdown-item" href="{{route('pagina.index')}}#roteiros"><img src="{{asset('assets/icon-menu_roteiros.png')}}" alt="" width="30">ROTEIROS</a>
          </div>
        </li>
        <li class="nav-item ml-lg-1">
          <a class="nav-link" href="{{Request::is('/') ? '#destaque' : route('pagina.index').'#destaque'}}"><img src="{{asset('assets/icon-menu_destaque.png')}}" alt="" width="30">DESTAQUE</a>
        </li>
        <li class="nav-item ml-lg-1">
          <a class="nav-link" href="#contato"><img src="{{asset('assets/icon-menu_contato.png')}}" alt="" width="30">CONTATO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>