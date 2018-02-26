<div id="teste" class="navbar-wrapper">
  <div class="container-fluid">
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <span class="navbar-menu-text hidden-xs">MENU</span>
        <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse" data-target="#navbar-collapse-x">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('pagina.index') }}">
          <img src="{{ asset('assets/logo-formula-turismo-branca.png') }}" class="img-responsive hidden-xs" alt="">
          <img src="{{ asset('assets/logo-formula-turismo-branca.png') }}" class="img-responsive visible-xs" alt="">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-x">
        <ul class="nav navbar-nav navbar-right">
         <li><a class="link-menu" href="{{route('pagina.index')}}">Pagina Inicial</a></li>
         <li role="separator" class="divider"></li>
         <li><a class="link-menu" href="http://localhost/form/public/#destinos">DESTINOS</a></li>
         <li role="separator" class="divider"></li>
         <li><a class="link-menu" href="#about">QUEM SOMOS</a></li>
         <li role="separator" class="divider"></li>
         <li><a class="link-menu" href="http://localhost/form/public/#destaque">VIAGEM DESTAQUE</a></li>
         <li role="separator" class="divider"></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ROTEIROS<span class="caret"></span></a>
          <ul class="dropdown-menu">
             @foreach ($continentes as $cont)
              <li><a class="link-menu" href="{{route('pagina.exibirContinente', mb_strtolower($cont->nome))}}">{{$cont->nome}}</a></li>
              @endforeach
          </ul>
        </li>
        <li><a class="link-menu" href="#monte-seu-roteiro">MONTE UM ROTEIRO</a></li>
          <li role="separator" class="divider"></li>
          <li><a class="link-menu" href="#contato">CONTATO</a></li>
      </ul>
    </div>
  </nav>
</div>
</div>
