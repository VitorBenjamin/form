@extends('layouts.app')

@section('content')
<!-- Carousel -->

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
          <img src="{{ asset('assets/logo-formula-turismo-preta.png') }}" class="img-responsive hidden-xs" alt="">
          <img src="{{ asset('assets/logo-formula-turismo-branca.png') }}" class="img-responsive visible-xs" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-x">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="link-menu" href="#">INÍCIO</a></li>
          <li role="separator" class="divider"></li>
          <li><a class="link-menu" href="#">QUEM SOMOS</a></li>
          <li role="separator" class="divider"></li>
          <li><a class="link-menu" href="#">ESTILOS DE VIAGEM</a></li>
          <li role="separator" class="divider"></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ROTEIROS<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="link-menu" href="#">AMÉRICA DO SUL</a></li>
              <li><a class="link-menu" href="#">AMÉRICA DO NORTE</a></li>
              <li><a class="link-menu" href="#">EUROPA</a></li>
              <li><a class="link-menu" href="#">ÁFRICA</a></li>
              <li><a class="link-menu" href="#">ÁSIA</a></li>
              <li><a class="link-menu" href="#">OCEANIA</a></li>
              <li><a class="link-menu" href="#">ANTÁRTIDA</a></li>
            </ul>
          </li>
          <li><a href="#">MONTE UM ROTEIRO</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">BLOG</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">CONTATO</a></li>
        </ul>
      </div><!-- .navbar-collapse -->
    </nav>
  </div>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs" style="background: #fff center/cover no-repeat;height: 700px">
            <div class="row">
              <div class="col-sm-offset-1 col-sm-10 col-md-9">
                <div class="texto-carousel">
                  <h1 style="margin-top: 40%">Arte Design e Arquitetura</h1>
                  <p class="show-summary">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
                  </p>

                  <div class="row">
                    <div class="col-xs-5 col-md-4">
                      <button type="">VER MAIS</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6" style="background: url('{{ asset('assets/slide-01.jpg') }}') center/cover no-repeat; height: 700px;">
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs" style="background: #fff center/cover no-repeat;height: 700px">
            <div class="row">
              <div class="col-sm-offset-1 col-sm-10 col-md-9">
                <div class="texto-carousel">
                  <h1 style="margin-top: 40%">Arte Design e Arquitetura</h1>
                  <p class="show-summary">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
                  </p>
                  <div class="row">
                    <div class="col-xs-5 col-md-4">
                      <button type="">VER MAIS</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6" style="background: url('{{ asset('assets/slide-02.jpg') }}') center/cover no-repeat; height: 700px;">
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs" style="background: #fff center/cover no-repeat;height: 700px">
            <div class="row">
              <div class="col-sm-offset-1 col-sm-10 col-md-9">
                <div class="texto-carousel">
                  <h1 style="margin-top: 40%">Arte Design e Arquitetura</h1>
                  <p class="show-summary">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
                  </p>

                  <div class="row">
                    <div class="col-xs-5 col-md-4">
                      <button type="">VER MAIS</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-sm-6" style="background: url('{{ asset('assets/slide-03.jpg') }}') center/cover no-repeat; height: 700px;"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-offset-6 col-sm-2 col-md-offset-6 col-md-1 hidden-xs" style="position: absolute; top: 10%; z-index:1000">
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <img class="glyphicon glyphicon-chevron-left" src="{{asset('assets/seta-esq.svg')}}" alt="">
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <img class="glyphicon glyphicon-chevron-right" src="{{asset('assets/seta-dir.svg')}}" alt="">
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- FIM Carousel -->


<!-- SELECT VIAGENS -->
<div class="container-fluid select">
  <div class="container select-margin">
    <div class="row margem-padrao">
      <div class="col-sm-6 col-md-7">
        <div class="border-left">
          <p class="center">VIAGENS</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-5">
        <div class="select-right">
          <select>
            <option value="">SELECIONE O DESTINO</option>
            <option value="">Porto Seguro</option>
            <option value="">Salvador</option>
            <option value="">Porto de Galinhas</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->

<!-- VIAGENS CAPTIONS -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="{{asset('assets/viagem-1.jpg')}}" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="col-xs-6 col-md-6">
              <div class="border-top">
                <hr width="25%">
                <p>Porto Seguro</p>
              </div>
            </div>
            <div class="col-xs-6 col-md-6">
              <a href="#" class="a-caption">
                <div class="button-caption">
                  VER MAIS
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="{{asset('assets/viagem-2.jpg')}}" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-6">
              <div class="border-top">
                <hr width="25%">
                <p>Porto Seguro</p>
              </div>
            </div>
            <div class="col-xs-6 col-md-6">
              <a href="#" class="a-caption">
                <div class="button-caption">
                  VER MAIS
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="{{asset('assets/viagem-3.jpg')}}" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-6">
              <div class="border-top">
                <hr width="25%">
                <p>Porto Seguro</p>
              </div>
            </div>
            <div class="col-xs-6 col-md-6">
              <a href="#" class="a-caption">
                <div class="button-caption">
                  VER MAIS
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="{{asset('assets/viagem-4.jpg')}}" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <div class="caption-rodape">
              <div class="col-xs-6 col-md-6">
                <div class="border-top">
                  <hr width="25%">
                  <p>Porto Seguro</p>
                </div>
              </div>
              <div class="col-xs-6 col-md-6">
                <a href="#" class="a-caption">
                  <div class="button-caption">
                    VER MAIS
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="{{asset('assets/viagem-5.jpg')}}" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-6">
              <div class="border-top">
                <hr width="25%">
                <p>Porto Seguro</p>
              </div>
            </div>
            <div class="col-xs-6 col-md-6">
              <a href="#" class="a-caption">
                <div class="button-caption">
                  VER MAIS
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <div class="thumb">
          <img src="{{asset('assets/viagem-6.jpg')}}" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-6">
              <div class="border-top">
                <hr width="25%">
                <p>Porto Seguro Porto Seguro </p>
              </div>
            </div>
            <div class="col-xs-6 col-md-6">
              <a href="#" class="a-caption">
                <div class="button-caption">
                  VER MAIS
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIM VIAGENS CAPTIONS -->

<!-- VIAGENS LISTAGENS -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="links-viagens">
        <a href="#" title=""><p>Silversea Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Azura - Moçambique & Tanzania</p></a>

        <a href="#" title=""><p>Art Basel Miami 2017</p></a>

        <a href="#" title=""><p>Silversea </p></a>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="links-viagens">
        <a href="#" title=""><p>Silversea Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Azura - Moçambique & Tanzania</p></a>

        <a href="#" title=""><p>Art Basel Miami 2017</p></a>

        <a href="#" title=""><p>Silversea </p></a>

      </div>
    </div>
    <div class="col-sm-4">
      <div class="links-viagens">
        <a href="#" title=""><p>Silversea Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Tailândia - Soneva Kiri</p></a>

        <a href="#" title=""><p>Azura - Moçambique & Tanzania</p></a>

        <a href="#" title=""><p>Art Basel Miami 2017</p></a>

        <a href="#" title=""><p>Silversea </p></a>

      </div>
    </div>
    <!-- <div class="container">
      <div class="row">
        <div class="col-sm-offset-5 col-sm-2" style="text-align: center;">
          <button type="button" class="links-vermais">VER MAIS</button>
        </div>
      </div>
    </div> -->
  </div>
</div>
<!-- FIM VIAGENS LISTAGENS -->

<!-- VIAGENS LISTAGENS -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12" style="padding: 0; background: url('{{asset('assets/slide-02.jpg')}}') center/cover no-repeat; min-height:700px">
      <div style="margin-top: 50px" style="">
      </div>
    </div>
  </div>
</div>
<!-- FIM VIAGENS LISTAGENS -->
<div class="container-fluid" style="background-color: #fff">
  <div class="row" style="margin: 7% 0 5% 0">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-md-5">
          <div class="border-left">
            <p class="center" style="color: #161b33;">MONTE O SEU ROTEIRO</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p class="roteiro-paragrafo">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting,
          </p>
        </div>
        <div class="col-md-6">
          <p class="roteiro-paragrafo">
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <img class="img-responsive" src="{{asset('assets/avatar-consultora.png')}}" style="float:left;" alt="">
          <img src="{{asset('assets/assinatura-consultora.svg')}}" style="width: 40%; margin: 40px 0 0 0;clear:both" alt="">
        </div>
        <div class="col-md-6" style="margin-top:35px">
          <img class="roteiro-img" src="{{asset ('assets/icon-email.svg')}}" alt="" style="width:30px">
          <span class="roteiro-span">roteiro@formulaturismo.com.br</span>

          <img class="roteiro-img" src="{{asset('assets/icon-telefone.svg')}}" alt="" style="width:30px">
          <span class="roteiro-span">+55 (21) 2509-4614</span>
        </div>
      </div>

    </div>

  </div>
</div>

<!-- LISTAGENS CATEGORIAS -->
<div class="container-fluid select">
  <div class="row" style="margin: 10% 0">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 middle">
          <p class="categorias">QUAL ESTILO DE VIAGEM FAZ PARTE DO SEU SONHO?</p>
        </div>
        <div class="col-sm-10">
          <div class="owl-carousel owl-theme">
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-arte-design-arquitetura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-aventura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-especial-china.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-arte-design-arquitetura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-aventura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-especial-china.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-arte-design-arquitetura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-aventura.svg')}}" alt="">
            </div>
            <div>
              <img class="img-responsive" src="{{asset('assets/tag-especial-china.svg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIM LISTAGENS CATEGORIAS -->

<!-- LISTAGENS CATEGORIAS -->
<div class="container-fluid news" style="background: url('{{asset('assets/bg-newsletter.jpg')}}') center/cover no-repeat;">
  <div class="row" style="margin: 7% 0 5% 0">

    <div class="col-sm-6 col-md-offset-1 col-md-5">
      <div class="newsletter">
        <h1>Assine nossa Newsletter</h1>
        <div class="col-sm-6 col-md-11" style="padding: 0">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been. </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="newsletter-form">
        <form action="" method="get" class="form-inline" accept-charset="utf-8">
          <div class="form-group">
            <label class="newslatter-label" for="newslatter-email">E-MAIL</label>
            <input type="email" class="form-control" id="newslatter-email"/>
            <button id="newslatter-submit" type="submit" class="btn btn-default">ENVIAR</button>
          </div>
        </form>    
      </div>
    </div>

  </div>
</div>
<!-- FIM LISTAGENS CATEGORIAS -->

<!-- LISTAGENS CATEGORIAS -->
<div class="container-fluid" style="background: url('{{asset('assets/bg-categoria-continente-norte.jpg')}}') center/cover no-repeat;">
  <div class="row" style="margin: 7% 0 5% 0">

    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 dicas" style="padding: 0">

          <h1>Check-in</h1>
          <hr>
          <div class="collumn">
            <ul class="paises-lista">
              <li><a title="" data-toggle="modal" data-target="#eua">Estados Unidos</a></li>
              <li><a title="" data-toggle="modal" data-target="#hol">Holanda</a></li>
              <li><a title="" data-toggle="modal" data-target="#con">Cone Sul</a></li>
              <li><a title="" data-toggle="modal" data-target="#chi">Chile</a></li>
              <li><a title="" data-toggle="modal" data-target="#mex">México</a></li>
              <li><a title="" data-toggle="modal" data-target="#gui">Guiana</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-offset-1 col-md-2 hidden-sm hidden-xs" style="padding: 0">
          <hr class="hr-vertical">
        </div>
        <div class="col-md-offset-1 col-md-4 dicas" style="padding: 0">
          <h1>Dicas de Viagens</h1>
          <hr>
          <div class="collumn">
            <ul class="paises-lista">
              <li><a title="" data-toggle="modal" data-target="#casa">Casa</a></li>
              <li><a title="" data-toggle="modal" data-target="#bolso">Bolso</a></li>
              <li><a title="" data-toggle="modal" data-target="#doc">Documentos</a></li>
              <li><a title="" data-toggle="modal" data-target="#sau">Saúde</a></li>
              <li><a title="" data-toggle="modal" data-target="#seg">Seguro de Viagem</a></li>
              <li><a title="" data-toggle="modal" data-target="#car">Carro</a></li>
              <li><a title="" data-toggle="modal" data-target="#aer">Aéreo</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('modals.modals')

<div class="container-fluid" style="background-color: #d8d8d8">
  <div class="row" style="margin: 7% 0 5% 0">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-md-5">
          <div class="border-left">
            <p class="center" style="color: #161b33;">QUEM SOMOS</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p class="roteiro-paragrafo ">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
          </p>
        </div>
        <div class="col-md-6">
          <p class="roteiro-paragrafo">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only ﬁve centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-offset-9 col-sm-3">
          <img style="width:97%" src="{{asset('assets/logo-formula-turismo-preta.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SELECT VIAGENS -->
<div class="container-fluid">
  <div class="container select-margin">
    <div class="row" style="margin: 4% 0">
      <div class="col-sm-6 col-md-7">
        <div class="border-left">
          <p class="center" style="color:#161b33">NOSSOS CLIENTES</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12" style="padding: 0">
      <div class="owl-carousel clientes owl-theme">
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-1.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-2.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-3.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-4.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-5.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-1.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-2.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-3.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-4.jpg')}}" alt="">
        </div>
        <div>
          <img class="img-responsive" src="{{asset('assets/cliente-5.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SELECT VIAGENS -->
<div class="container-fluid select">
  <div class="container select-margin">
    <div class="row margem-padrao">
      <div class="col-sm-offset-4 col-sm-4">
        <img class="img-responsive rodape-center" src="{{asset('assets/logo-formula-turismo-branca.png')}}" alt="">
      </div>
      
      <div class="col-sm-offset-3 col-sm-6">
        <p class="rodape-center">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
        </p>
      </div>
      
      <div class="col-xs-12">
        <div class="col-md-offset-1 col-md-3">
          <img class="roteiro-img" src="{{asset('assets/icon-telefone.svg')}}" alt="" style="width:30px">
          <span class="rodape-span">+55 (21) 2509-4614</span>

        </div>
        <div class="col-md-4">
          <img class="roteiro-img" src="{{asset ('assets/icon-email.svg')}}" alt="" style="width:30px">
          <span class="rodape-span">roteiro@formulaturismo.com.br</span>
        </div>

        <div class="col-md-3">
          <img class="roteiro-img" src="{{asset('assets/icon-facebook.svg')}}" alt="" style="width:30px">
          <span class="rodape-span">+55 (21) 2509-4614</span>
        </div>
      </div>
    </div>
    <div class="row margem-padrao">
      <div class="col-xs-12">
        <div class="row">
          <form action="enviar.php" method="post" name="form" class="formphp form">
            <div class="col-sm-offset-4 col-sm-4 col-md-offset-0">
              <input id="nome" name="nome" type="text" placeholder="Nome">
            </div>
            <div class="col-md-4">
              <input id="telefone" name="telefone" type="text" placeholder="Telefone">
              <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
              <input type="text" class="nao-aparece" name="leaveblank">
              <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
              <input type="text" class="nao-aparece" name="dontchange" value="http://" >
            </div>
            <div class="col-md-4">
              <input id="email" name="email" type="text" placeholder="E-mail">
            </div>
            <div class="col-xs-12">
              <textarea name="mensagem" id="mensagem" placeholder="Digite aqui sua mensagem:"></textarea>
            </div>
            <div class="col-md-offset-10 col-md-2">
              <button id="enviar" name="enviar" type="submit">ENVIAR</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--  -->
<div class="container-fluid" style="background-color: #1d233c;">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-9 col-md-3 vilaca">
        Desenvolvido pela
        <img class="vilaca" src="{{asset('assets/agencia-vilaca-eunapolis.svg')}}" alt="">
      </div>
    </div>
  </div>
</div>

@endsection