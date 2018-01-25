@extends('layouts.app')

@section('content')

@include('layouts.menu')

<!-- INICIO SESSÃO DO CAROUSEL -->
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
<!-- FIM SESSÃO DO CAROUSEL -->

<!-- INCIO SESSÃO DE SELEÇÃO DE VIAGENS -->
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
<!-- FIM DA SESSÃO DE SELEÇÃO DE VIAGENS -->


<!-- INICIO DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY-->
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
<!-- FIM  DA SESSÃO DAS VIAGENS COM CAPTION/OVERLAY -->

<!-- INICIO DA SESSÃO DAS VIAGENS -->
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
<!-- FIM DA SESSÃO DAS VIAGENS -->

<!-- INCIO SESSÃO DA VIAGEM EM DESTAQUE -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12" style="padding: 30px; background: url('{{asset('assets/slide-02.jpg')}}') center/cover no-repeat; min-height:550px">
      <div style="padding:150px 0 30px 0; width: 100%; min-height: 550px;border: 3px solid #fff" style="">
        <div class="container destaque">
          <div class="row">
            <div class="col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4" style="text-align: center;">

              <a href="#" title="">
                <span class="text-center">PACOTE ESPECIAL</span>
              </a>

            </div>
          </div>
          <div class="row">
            <div class="col-md-offset-2 col-md-8">
              <h1 class="text-center">Casa de Uco Mendoza</h1>
            </div>
          </div>
          <div class="row">
           <div class="col-sm-offset-4 col-sm-4 col-md-offset-5 col-md-2">
            <h5 class="text-center" style="margin-bottom: 150px">ARGENTINA</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-offset-1 col-sm-10 col-md-offset-4 col-md-4">
            <img class="img-responsive" style="margin:auto" src="{{ asset('assets/logo-formula-turismo-branca.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- FIM SESSÃO DA VIAGEM EM DESTAQUE -->

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

<!-- INCIO SESSÃO CATEGORIAS -->
@include('layouts.categorias')
<!-- FIM LISTAGENS CATEGORIAS -->

<!-- INCIO SESSÃO NEWS LATTER -->
@include('layouts.newslatter')
<!-- FIM SESSÃO NEWS LATTER -->

<!-- INCIO SESSÃO CHECK IN E DICAS -->
@include('layouts.checkin_dicas')

@include('modals.modals')
<!-- FINAL SESSÃO CHECK IN E DICAS -->

<!-- INCIO SESSÃO QUEM SOMOS -->
@include('layouts.about')
<!-- FINAL SESSÃO QUEM SOMOS -->

<!-- INCIO SESSÃO CLIENTES -->
@include('layouts.clientes')
<!-- FINAL SESSÃO CLIENTES -->

<!-- INCIO SESSÃO CLIENTES -->
@include('layouts.footer')
<!-- FIM SESSÃO CLIENTES -->

@endsection