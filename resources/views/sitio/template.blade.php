<!DOCTYPE HTML>
<html>
	<head>
        <title>Dottamos - Free Bootstrap 4 Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

        <style>
            .texto-borde {
                -webkit-text-stroke: 1px black;
                color: transparent; 
            }
        </style>

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">

					
					@include('sitio.secciones.header')
                    
					@include('sitio.secciones.menu')
                    
				</div>
            </div>
            
			{{-- MARQUESINA --}}
            @include('sitio.secciones.marquesina')
            
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	{{-- <li style="background-image: url({{asset('footwear/images/img_bg_1.jpg')}});"> --}}
                <li style="background-image: url({{asset('img/sliders/aseo-slider.jpg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1 texto-borde">Productos de aseo de excelente calidad</h1>
					   					{{-- <p class="category texto-borde"><span>New trending shoes</span></p> --}}
					   					<p><a href="{{asset('/catalogo/aseo')}}" class="btn btn-primary">Ver catálogo productos aseo</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url({{asset('img/sliders/papeleria-slider.jpg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1 texto-borde">papelería y mobiliarios de oﬁcina</h1>
					   					{{-- <h2 class="head-2 texto-borde">Sale</h2> --}}
					   					{{-- <h2 class="head-3 texto-borde"><strong class="font-weight-bold">50%</strong> Off</h2> --}}
					   					{{-- <p class="category texto-borde"><span>Big sale sandals</span></p> --}}
					   					<p><a href="{{asset('/catalogo/papeleria')}}" class="btn btn-primary">Ver catálogo productos papelería</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
                   </li>
                   
                    {{-- <li style="background-image: url({{asset('footwear/images/img_bg_3.jpg')}});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1 class="head-1">New</h1>
                                            <h2 class="head-2">Arrival</h2>
                                            <h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off</h2>
                                            <p class="category"><span>New stylish shoes for men</span></p>
                                            <p><a href="#" class="btn btn-primary">Ver catálogo productos</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                   
			  	</ul>
		  	</div>
        </aside>
        
		{{-- <div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
					</div>
				</div>
			</div>
        </div> --}}
        
		{{-- <div class="colorlib-product">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url({{asset('footwear/images/men.jpg')}});"></a>
							<div class="desc">
								<h2><a href="#">Shop Men's Collection</a></h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url({{asset('footwear/images/women.jpg')}});"></a>
							<div class="desc">
								<h2><a href="#">Shop Women's Collection</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
						<h2>Productos destacados</h2>
					</div>
				</div>
				<div class="row row-pb-md">

                    @foreach ($productos as $producto)
                        <div class="col-lg-3 mb-4 text-center">
                            <div class="product-entry border">
                                <a class="prod-img">
                                    <img src="{{asset('img/productos/'.$producto->imagen)}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                </a>
                                <div class="desc">
                                    <h2><a href="#">{{$producto->nombre}}</a></h2>
                                    <span class="price">${{$producto->precio}}</span>
                                </div>
                            </div>
                        </div>                        
                    @endforeach
                    
					{{-- <div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-2.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Minam Meaghan</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
                    </div> --}}
                    
					{{-- <div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-3.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Men's Taja Commissioner</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
                    </div> --}}
                    
					{{-- <div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-4.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Russ Men's Sneakers</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
                    </div> --}}
                    
					{{-- <div class="w-100"></div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-5.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-6.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-7.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-8.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="w-100"></div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-9.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-10.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-11.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-12.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="w-100"></div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-13.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-14.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-15.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('footwear\images\item-16.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
                    </div> --}}
                    
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p><a href="#" class="btn btn-primary btn-lg">Ver todos los productos</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-partner">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>Nuestras Marcas</h2>
					</div>
				</div>
				<div class="row">
					<div class="col partner-col text-center">
						<img src="{{asset('img/marcas/salud/care.png')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="{{asset('img/marcas/aseo/protex.png')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="{{asset('img/marcas/aseo/jgb.png')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="{{asset('img/marcas/papeleria/norma.png')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="{{asset('img/marcas/papeleria/sharpie.png')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
				</div>
			</div>
		</div>

        {{-- IMPORTO FOOTER --}}
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

