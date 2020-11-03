<!DOCTYPE HTML>
<html>
	<head>
	<title>Dottamos - Nosotros</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content="">
	<meta property="og:image" content="">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:image" content="">
	<meta name="twitter:url" content="">
	<meta name="twitter:card" content="">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('footwear\css\animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('footwear\css\icomoon.css')}}">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{asset('footwear\css\ionicons.min.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('footwear\css\bootstrap.min.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('footwear\css\magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('footwear\css\flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('footwear\css\owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('footwear\css\owl.theme.default.min.css')}}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{asset('footwear\css\bootstrap-datepicker.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('footwear\fonts\flaticon\font\flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('footwear\css\style.css')}}">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">

                @include('sitio.secciones.header')
                 
                 {{-- MENU PRINCIPAL --}}
                 @include('sitio.secciones.menu')
				</div>
            </div>
            
			{{-- MARQUESINA --}}
            @include('sitio.secciones.marquesina')
            
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{asset('/')}}">Inicio</a></span> / <span>Nosotros</span></p>
					</div>
				</div>
			</div>
		</div>

        <div class="colorlib-about">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-6 mb-3">
						{{-- <div class="video colorlib-video" style="background-image: url(images/about.jpg);">
							<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-play3"></i></a>
							<div class="overlay"></div>
                        </div> --}}
                        <div class="about-wrap">
							<h2>Misión</h2>
							<p align="justify">Brindar a nuestros usuarios una experiencia rápida, ágil y eficaz en el suministro de nuestro amplio portafolio con productos de aseo, papelería y cafetería ajustados a las necesidades de cada uno de nuestros clientes.</p>
							{{-- <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p> --}}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="about-wrap">
							<h2>Visión</h2>
							<p align="justify">Llegar a ser en el año 2030 el aliado estratégico de las empresas de la costa caribe colombiana en el suministro de todos los productos e insumos de aseo, papelería y cafetería para su óptimo funcionamiento, nos visionamos al finalizar esta década siendo punto de referencia como líderes en precios bajos de los mejores productos del mercado. </p>
							{{-- <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p> --}}
						</div>
					</div>
				</div>
			</div>
		</div>

        {{-- FOOTER --}}
        @include('sitio.secciones.footer')
        
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('footwear\js\jquery.min.js')}}"></script>
   <!-- popper -->
   <script src="{{asset('footwear\js\popper.min.js')}}"></script>
   <!-- bootstrap 4.1 -->
   <script src="{{asset('footwear\js\bootstrap.min.js')}}"></script>
   <!-- jQuery easing -->
   <script src="{{asset('footwear\js\jquery.easing.1.3.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('footwear\js\jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('footwear\js\jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('footwear\js\owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('footwear\js\jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('footwear\js\magnific-popup-options.js')}}"></script>
	<!-- Date Picker -->
	<script src="{{asset('footwear\js\bootstrap-datepicker.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('footwear\js\jquery.stellar.min.js')}}"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="{{asset('footwear\js\google_map.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('footwear\js\main.js')}}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

	</body>
</html>

