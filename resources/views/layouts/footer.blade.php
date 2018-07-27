<div class="container-fluid select">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 text-center py-5">
        <img class="img-responsive rodape-center" src="{{asset('assets/logo-formula-turismo-branca.png')}}" alt="">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 text-center">
        <p style="color:#fff">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
          diam nonummy nibh euismod .
        </p>
      </div>
    </div>

<!--     <div class="row justify-content-center">
      <div class="col-6 align-self-center">
        <p class="rodape-center">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
        </p>
      </div>
    </div> -->
    <div class="row justify-content-center py-4">
      <div class="col-md-4 text-center">
        <img class="roteiro-img" src="{{asset('assets/icon-telefone.svg')}}" alt="" style="width:30px">
        <span class="rodape-span">+55 (21) 2509-4614</span>

      </div>
      <div class="col-md-4 text-center">
        <img class="roteiro-img" src="{{asset ('assets/icon-email.svg')}}" alt="" style="width:30px">
        <span class="rodape-span">roteiro@formulaturismo.com.br</span>
      </div>

      <div class="col-md-4 text-center">
        <img class="roteiro-img" src="{{asset('assets/icon-facebook.svg')}}" alt="" style="width:30px">
        <span class="rodape-span">+55 (21) 2509-4614</span>
      </div>
    </div>
    <div class="row pb-3">
      <div class="col-12 col-md-6">
        <form action="{{route('postContact')}}" method="post" class="form">
          {{ csrf_field() }}
          <input class="mb-3" id="nome" name="nome" type="text" placeholder="Nome" required>
          <input class="mb-3" id="telefone" name="telefone" pattern="^\d{11}$" title="O Número Deve ter 11 digitos Exemplo: 73999541256" type="tel" placeholder="Telefone">
          <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
          <input type="text" class="nao-aparece" name="leaveblank">
          <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
          <input type="text" class="nao-aparece" name="dontchange" value="http://">
          <input class="mb-3" id="email" name="email" type="email" placeholder="E-mail" required>
          <textarea class="mb-3" name="mensagem" id="mensagem" placeholder="Mensagem:" required></textarea>
          <button type="submit">ENVIAR</button>
        </form>
      </div>
      <div class="col-12 col-md-6">
        <div class="map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.8513541693364!2d-39.58987368508322!3d-16.38153284203366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7366dc52b0b14c1%3A0x7c6052cb2de2961b!2zQWfDqm5jaWEgVklMQcOHQSBDT01VTklDQcOHw4NP!5e0!3m2!1spt-BR!2sbr!4v1532354038886" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="background-color: #1d233c;">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-3 vilaca">
        <a href="http://agenciavilaca.com.br" title="">
          Desenvolvido pela
          <img class="vilaca" src="{{asset('assets/agencia-vilaca-eunapolis.svg')}}" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
