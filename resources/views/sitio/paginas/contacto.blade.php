<!DOCTYPE HTML>
<html>
	<head>
	<title>Dottamos - Contacto</title>
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
						<p class="bread"><span><a href="{{asset('/')}}">Inicio</a></span> / <span>Contacto</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
                @include('admin.secciones.exitoso')
                @include('admin.secciones.error_email')
				<div class="row">
					<div class="col-sm-12 mb-5">
						<h3>Información de Contacto</h3>
						{{-- <div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>
							</div>
						</div> --}}
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="contact-wrap">
							<h3>Contactanos</h3>
                            <form action="{{asset('/contacto/email')}}" method="POST" class="contact-form">
                                @csrf
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">Nombres</label>
											<input type="text" id="nombres" name="nombres" class="form-control" placeholder="" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lname">Apellidos</label>
											<input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="" required>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Correo</label>
											<input type="email" id="email" name="email" class="form-control" placeholder="" required>
										</div>
                                    </div>
                                    <div class="col-sm-12">
										<div class="form-group">
											<label for="email">Celular</label>
											<input type="text" id="celular" name="celular" class="form-control" placeholder="" required>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Asunto</label>
											<input type="text" id="asunto" name="asunto" class="form-control" placeholder="" required>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="message">Mensaje</label>
											<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control" placeholder="" required></textarea>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" value="Enviar mensaje" class="btn btn-primary">
										</div>
									</div>
								</div>
							</form>		
						</div>
					</div>
					<div class="col-md-6">
                        {{-- <div id="map" class="colorlib-map"></div>		 --}}
                        <img src="{{asset('img/paginas/contacto.png')}}" width="100%"alt="">
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

