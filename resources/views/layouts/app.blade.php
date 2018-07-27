<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="Agência de viagens desde 1988, membro Virtuoso, especialista em viagens segmentadas e personalizadas, oferecendo turismo de alto padrão em qualquer parte do mundo." />
	<meta name="keywords" content="blog de viagem, guia de viagem, viagens, férias, hotéis, passeios, viagem de conhecimento, roteiros de viagem, praia, montanha, neve, dicas de restaurantes, gastronomia, enogastronomia, resorts, skiresorts, viagem de luxo, hotéis de luxo, viagem cultural, viagem de aventura, safari, cruzeiros, viagens, europa, paris, new York, nova york, londres, brasil, destinos, cultura, entretenimento, boa comida, restaurantes, eventos, passeios, museus, parques, compras, noite, dicas de viagem, , o que fazer, onde comprar, onde ir, dicas restaurantes, dicas viagens exóticas, onde comer, onde beber, dicas de viagens exóticas, inspiração de viagens, dicas exclusivas, roteiros personalizado, dicas de esqui, dicas de ski, viagem casamento, casamento exterior, viagem lua de mel, viagem a dois, roteiros personalizados, viagem personalizada, roteiro de luxo, roteiros exclusivos.
	"/>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('assets/favicon.png') }}">
	<title>{{ config('app.name', '- Formula Turismo | Arte de Viajar') }}</title>

	<!-- Styles -->
	<!-- <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mb.gallery.min.css?_v=1.3.1') }}"/>

	<!-- <link href="{{ asset('css/carousel.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	
</head>
<body>
	@yield('content')
	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		@if(Session::has('flash_message'))
		var type = "{{ Session::get('flash_message')['alert-type'] }}";
		switch(type){
			case 'info':
			toastr.options.timeOut = 5000;
			toastr.options.closeButton = true;
			toastr.info("{{ Session::get('flash_message')['msg'] }}");
			break;
			case 'warning':
			toastr.options.timeOut = 5000;
			toastr.options.closeButton = true;
			toastr.warning("{{ Session::get('flash_message')['msg'] }}");
			break;
			case 'success':
			toastr.options.timeOut = 5000;
			toastr.options.closeButton = true;
			toastr.success("{{ Session::get('flash_message')['msg'] }}");
			break;
			case 'error':
			toastr.options.timeOut = 5000;
			toastr.options.closeButton = true;
			toastr.error("{{ Session::get('flash_message')['msg'] }}");
			break;
		}
		@endif
	</script>
	<!-- <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="{{ asset('js/jquery.mb.browser.min.js') }}"></script>
	<script src="{{ asset('js/jquery.mb.CSSAnimate.min.js') }}"></script>
	<script src="{{ asset('js/jquery.mb.gallery.min.js?_v=1.3.1') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" type="text/javascript"></script>
	<!-- <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" type="text/javascript"></script>
	
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
