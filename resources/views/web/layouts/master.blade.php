<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
	<title>Ilustre Municipalidad de Cisnes - @yield('title', 'Portal Municipal')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/bootstrap.min.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/jquery.bxslider.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/font-awesome.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/magnific-popup.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/owl.carousel.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/owl.theme.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/ticker-style.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/style.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/style2.css') }}" media="screen">
	<link rel="stylesheet" href="{{ asset('assets/remodal/dist/remodal.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/remodal/dist/remodal-default-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/customcss.css') }}"/>
	<link href="{{ asset('assets/admin/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css">





</head>
<body>
<!-- Container -->
<div id="container">

	<!-- Header
        ================================================== -->
	<header class="clearfix">
		<!-- Bootstrap navbar -->
		<nav class="navbar navbar-default navbar-static-top">
			<div class="top-line">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="top-line-list">
								<li>
									<span class="city-weather">Cisnes, Chile</span>
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
											<path fill="#ffffff" d="M208,64c8.833,0,16-7.167,16-16V16c0-8.833-7.167-16-16-16s-16,7.167-16,16v32
												C192,56.833,199.167,64,208,64z M332.438,106.167l22.625-22.625c6.249-6.25,6.249-16.375,0-22.625
												c-6.25-6.25-16.375-6.25-22.625,0l-22.625,22.625c-6.25,6.25-6.25,16.375,0,22.625
												C316.062,112.417,326.188,112.417,332.438,106.167z M16,224h32c8.833,0,16-7.167,16-16s-7.167-16-16-16H16
												c-8.833,0-16,7.167-16,16S7.167,224,16,224z M352,208c0,8.833,7.167,16,16,16h32c8.833,0,16-7.167,16-16s-7.167-16-16-16h-32
												C359.167,192,352,199.167,352,208z M83.541,106.167c6.251,6.25,16.376,6.25,22.625,0c6.251-6.25,6.251-16.375,0-22.625
												L83.541,60.917c-6.25-6.25-16.374-6.25-22.625,0c-6.25,6.25-6.25,16.375,0,22.625L83.541,106.167z M400,256
												c-5.312,0-10.562,0.375-15.792,1.125c-16.771-22.875-39.124-40.333-64.458-51.5C318.459,145,268.938,96,208,96
												c-61.75,0-112,50.25-112,112c0,17.438,4.334,33.75,11.5,48.438C47.875,258.875,0,307.812,0,368c0,61.75,50.25,112,112,112
												c13.688,0,27.084-2.5,39.709-7.333C180.666,497.917,217.5,512,256,512c38.542,0,75.333-14.083,104.291-39.333
												C372.916,477.5,386.312,480,400,480c61.75,0,112-50.25,112-112S461.75,256,400,256z M208,128c39.812,0,72.562,29.167,78.708,67.25
												c-10.021-2-20.249-3.25-30.708-3.25c-45.938,0-88.5,19.812-118.375,53.25C131.688,234.083,128,221.542,128,208
												C128,163.812,163.812,128,208,128z M400,448c-17.125,0-32.916-5.5-45.938-14.667C330.584,461.625,295.624,480,256,480
												c-39.625,0-74.584-18.375-98.062-46.667C144.938,442.5,129.125,448,112,448c-44.188,0-80-35.812-80-80s35.812-80,80-80
												c7.75,0,15.062,1.458,22.125,3.541c2.812,0.792,5.667,1.417,8.312,2.521c4.375-8.562,9.875-16.396,15.979-23.75
												C181.792,242.188,216.562,224,256,224c10.125,0,19.834,1.458,29.25,3.709c10.562,2.499,20.542,6.291,29.834,11.291
												c23.291,12.375,42.416,31.542,54.457,55.063C378.938,290.188,389.209,288,400,288c44.188,0,80,35.812,80,80S444.188,448,400,448z"
											/>
										</svg>
									{{--	<span class="cel-temperature">+7</span>--}}
								</li>
								<li><span class="time-now">Ilustre Municipalidad de Cisnes</span></li>
								{{--<li><a href="#">Login</a></li>
								<li><a href="#">Contacto</a></li>
								<li><a href="#">Otros</a></li>--}}
							</ul>
						</div>

							<div class="pull-right  col-md-6">
								<a href="{{ url('https://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=MU047') }}" target="_blank"><img style="width: 150px;" src="{{ asset('assets/web/images/banner/t-activa.png') }}" alt=""></a>
								<a href="{{ url('https://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&p_p_lifecycle=0&p_p_state=normal&p_p_mode=view&_pdtorganismos_WAR_pdtorganismosportlet_entryId=500&redirect=https%3A%2F%2Fwww.portaltransparencia.cl%2FPortalPdT%2Fweb%2Fguest%2Fhome%3Fp_p_id%3D3%26p_p_lifecycle%3D0%26p_p_state%3Dmaximized%26p_p_mode%3Dview%26_3_groupId%3D0%26_3_keywords%3Dpuerto%2Bcisnes%26_3_redirect%3D%252FPortalPdT%252Fweb%252Fguest%252Fhome%253Fp_auth%253DgVKA8DxS%26_3_struts_action%3D%252Fsearch%252Fsearch%26_3_y%3D0%26_3_search_term%3Dpuerto%2Bcisnes%26_3_x%3D0#') }}" target="_blank"><img style="width: 150px;" src="{{ asset('assets/web/images/banner/t-info.png') }}" alt=""></a>
								<a href="{{ url('https://www.leylobby.gob.cl/instituciones/MU047') }}" target="_blank"><img style="width: 150px;" src="{{ asset('assets/web/images/banner/t-lobby.png') }}" alt=""></a>
							   {{-- <a href="{{ url('/atencion-al-vecino') }}" target="_blank"><img style="width: 150px;" src="{{ asset('assets/web/images/banner/t-dip.png') }}" alt="DIP"></a>--}}
							</div>

						</div>

				</div>
			</div>
			<!-- End Top line -->

			<!-- Logo & advertisement -->
			<div class="logo">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/web/images/logo/logo.png') }}" alt=""></a>
					</div>
					{{--<div class="pull-right">
						<a href="{{ url('') }}" alt=""></a>
						<a href="{{ url('') }}" target="_blank"><img style="width: 150px;" src="{{ asset('assets/web/images/banner/transp2.gif') }}" alt=""></a>
						<a href="{{ url('') }}" target="_blank"><img style="width: 150px;" src="{{ asset('assets/web/images/banner/lobby.gif') }}" alt=""></a>

					</div>--}}
				</div>
			</div>
			<!-- End Logo & advertisement -->

			<!-- navbar list container -->
			<div class="nav-list-container" style="position: relative;">
				<div class="container">
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<li><a class="tech" href="{{ url('/') }}">Home</a>

							<li class="drop"><a class="fashion" >Municipalidad</a>
								<ul class="dropdown">
									<li><a href="{{ url('/municipalidad/alcaldia') }}">Alcalde</a></li>
									<li><a href="{{ url('/municipalidad/concejal') }}">Concejo</a></li>

								{{--	<li><a href="{{ url('/municipalidad/') }}">Historia</a></li>--}}
									{{--<li><a href="{{ url('/municipalidad/') }}">Organigrama</a></li>--}}
									<li><a href="{{ url('/municipalidad/planregulador') }}">Plano Regulador</a></li>
									<li><a href="{{ url('/municipalidad/pladeco') }}">Pladeco</a></li>

									<li><a href="{{ url('/municipalidad/medioambiente') }}">Certificación Ambiental</a></li>

								</ul>
							</li>


							<li><a class="travel" href="{{ url('/municipalidad/comuna') }}">Comuna</a></li>
							<li><a class="tech" href="{{ url('/municipalidad/tramites') }}">Tramites</a></li>
							<li><a class="travel" href="{{ url('/noticias') }}">Noticias</a></li>
							<li><a class="tech" href="{{ url('/servicios-municipales/') }}">Servicios Municipales</a></li>
							<li><a class="fashion" href="{{ url('atencion-al-vecino') }}">Contacto</a></li>
							<li><a class="tech" href="{{ url('turismo') }}">Turismo</a></li>


							{{--<li><a class="tech" href="{{ url('/') }}">Cultura</a>--}}
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
			</div>
			<!-- End navbar list container -->

		</nav>
		<!-- End Bootstrap navbar -->

	</header>
	<!-- End Header -->



@yield('content')

<!-- footer

			================================================== -->
	<footer>
		<div class="container">
			<div class="footer-widgets-part">
				<div class="row">
					<div class="col-md-4">
						<div class="widget text-widget">
							<h1>Comuna de Cisnes</h1>
							<p>La comuna al estar ubicada en el límite noroeste de la Región de Aysén, cuenta con una posición estratégica para el desarrollo de las comunicaciones y transporte tanto terrestre como marítima.</p>
							<p>La comuna de Cisnes, es la tercera en extensión a nivel regional, con una superficie total de 17.450 Km2. correspondientes al 14,7% del territorio regional.</p>

						</div>

					</div>
					<div class="col-md-4">
						<div class="widget categories-widget">
							<h1>OFICINAS MUNICIPALES</h1>
							<ul class="category-list">
								<li>
									<a href="{{ url('/municipalidad/alcaldia') }}">Alcalde</a>
								</li>
								<li>
									<a href="{{ url('/municipalidad/concejal') }}">Concejo Municipal</a>
								</li>
								<li>
									<a href="{{ url('/municipalidad/') }}">Historia</a>
								</li>
								<li>
									<a href="{{ url('/municipalidad/') }}">Plano Regulador</a>
								</li>
								<li>
									<a href="{{ url('/municipalidad/') }}">Pladeco</a>
								</li>
							</ul>
						</div>
					</div>



					<div class="col-md-4">
						<div class="widget text-widget">
							<h1>Municipalidad de Puerto de Cisnes</h1>
							<p>Calle Rafael Sotomayor 191</p>
							<p>Teléfono: +56 67 234 6423  <br> +56 67 234 6413 </p>
							<p>Email: oirs@municipalidadcisnes.cl</p>
						</div>
						<div class="widget social-widget">
							<h1>Redes Sociales</h1>
							<ul class="social-icons">
								<li><a target="_blank" href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
								{{--<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>--}}
								<li><a target="_blank" href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
								{{--<li><a target="_blank" href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                                <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>--}}
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-last-line">
				<div class="row">
					<div class="col-md-6">
						<p>&copy; Todos los derechos reservados {{ Carbon\Carbon::now()->year }}. Municipalidad de Cisnes.</p>
					</div>
					<div class="col-md-6">
						<nav class="footer-nav">
							<ul>
								{{--<li><a href="#">Tramites</a></li>
								<li><a href="#">DAEM</a></li>
								<li><a href="#">Salud</a></li>
								<li><a href="#">Contacto</a></li>--}}
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->

</div>
<!-- End Container -->


<script type="text/javascript" src="{{ asset('assets/web/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.migrate.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.ticker.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.imagesloaded.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/retina-1.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/web/js/script.js')}}"></script>
<script src="{{ asset('assets/web/js/rut.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/remodal/dist/remodal.min.js') }}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-90860837-1', 'auto');
    ga('send', 'pageview');

</script>
<script>
    $(document).on('opening', '.remodal', function () {
        if (! $(window).scrollTop()) {
            $(this).css('margin-top', '240px');
        }
    });
</script>
@yield('scripts')
</body>
</html>