@extends('layouts.app')

@section('content')
<!-- Carousel -->

<div class="navbar-wrapper">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <span class="navbar-menu-text">MENU</span>
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
          <li data-toggle="collapse" data-target="#navbar-collapse.in"><a href="#top">Link</a></li>
          <li data-toggle="collapse" data-target="#navbar-collapse.in"><a href="#top">Link</a></li>
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
          </div>
          <div class="col-sm-6" style="background: url('{{ asset('assets/slide-01.jpg') }}') center/cover no-repeat; height: 700px;"></div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs" style="background: #fff center/cover no-repeat;height: 700px">
          </div>
          <div class="col-sm-6" style="background: url('{{ asset('assets/slide-02.jpg') }}') center/cover no-repeat; height: 700px;"></div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 hidden-xs" style="background: #fff center/cover no-repeat;height: 700px">
          </div>
          <div class="col-sm-6" style="background: url('{{ asset('assets/slide-03.jpg') }}') center/cover no-repeat; height: 700px;"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-3 col-sm-offset-1 col-sm-2 col-md-offset-6 col-md-1" style="position: absolute; top: 10%; z-index:1000">
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- FIM Carousel -->


<!-- SELECT VIAGENS -->
<div class="container-fluid select">
  <div class="container select-margin">
    <div class="row">
      <div class="col-sm-6 col-md-7">
        <div class="border-left">
          <p class="center">VIAGENS</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-5">
        <div class="select-right">
          <select name="">
            <option value="">SELECIONE O DESTINO AQUI</option>
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
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
          <img src="http://via.placeholder.com/1080x720" alt="" class="img-responsive">
          <div class="caption">
            <div class="col-xs-12">
              <div class="caption-titulo">
                <div class="caption-titulo">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
    <div class="container">
      <div class="row">
        <div class="col-sm-offset-5 col-sm-2" style="text-align: center;">
          <button type="button" class="links-vermais">VER MAIS</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIM VIAGENS LISTAGENS -->

<!-- VIAGENS LISTAGENS -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12" style="padding: 0">
      <div style="margin-top: 50px">
        <img src="{{asset('assets/slide-02.jpg')}}" class="img-responsive" alt="">
      </div>
    </div>
  </div>
</div>
<!-- FIM VIAGENS LISTAGENS -->

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
<div class="container-fluid" style="background: url('{{asset('assets/bg-newsletter.jpg')}}') center/cover no-repeat; height: 370px">
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
              <li><a title="" data-toggle="modal" data-target="#myModal">Estados Unidos</a></li>
              <li>Holanda</li>
              <li>Cone Sul</li>
              <li>Chile</li>
              <li>México</li>
              <li>Guiana</li>
            </ul>
          </div>
        </div>
        <div class="col-md-offset-1 col-md-2" style="padding: 0">
          <hr class="hr-vertical">
        </div>
        <div class="col-md-offset-1 col-md-4 dicas" style="padding: 0">
          <h1>Dicas de Viagens</h1>
          <hr>
          <div class="collumn">
            <ul class="paises-lista">
              <li>Estados Unidos</li>
              <li>Holanda</li>
              <li>Cone Sul</li>
              <li>Chile</li>
              <li>México</li>
              <li>Guiana</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- FIM LISTAGENS CATEGORIAS -->



@endsection