<div class="navbar-wrapper">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <span class="navbar-menu-text hidden-xs">MENU</span>
        <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse" data-target="#navbar-collapse-x">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#top">
          <img src="{{ asset('assets/logo-formula-turismo-branca.png') }}" class="img-responsive hidden-xs" alt="">
          <img src="{{ asset('assets/logo-formula-turismo-branca.png') }}" class="img-responsive visible-xs" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-x">
        <ul class="nav navbar-nav navbar-right">
         <li><a class="link-menu" href="#inicio">INÍCIO</a></li>
          <li role="separator" class="divider"></li>
          <li><a class="link-menu" href="#about">QUEM SOMOS</a></li>
          <li role="separator" class="divider"></li>
          <li><a class="link-menu" href="#destaque">VIAGEM DESTAQUE</a></li>
          <li role="separator" class="divider"></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ROTEIROS<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="link-menu" href="{{route('pagina.exibirContinente','america-do-sul')}}">AMÉRICA DO SUL</a></li>
              <li><a class="link-menu" href="{{route('pagina.exibirContinente','america-do-norte')}}">AMÉRICA DO NORTE</a></li>
              <li><a class="link-menu" href="{{route('pagina.exibirContinente','america-do-europa')}}">EUROPA</a></li>
              <li><a class="link-menu" href="{{route('pagina.exibirContinente','america-do-africa')}}">ÁFRICA</a></li>
              <li><a class="link-menu" href="{{route('pagina.exibirContinente','america-do-asia')}}">ÁSIA</a></li>
              <li><a class="link-menu" href="{{route('pagina.exibirContinente','america-do-OCEANIA')}}">OCEANIA</a></li>
              <li><a class="link-menu" href="{{route('pagina.exibirContinente','america-do-antantida')}}">ANTÁRTIDA</a></li>
            </ul>
          </li>
          <li><a href="#">MONTE UM ROTEIRO</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">BLOG</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">CONTATO</a></li>
        </ul>
      </div>
    </nav>
  </div>
</div>