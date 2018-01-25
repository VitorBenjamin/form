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

<!-- INCIO RODAPÉ VILÇA -->
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
<!-- FIM RODAPÉ VILÇA -->