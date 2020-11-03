<!DOCTYPE HTML>
<html>
	<head>
        <title>Dottamos - Catalogo</title>
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

        @section('breadcrumb')
            <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="bread"><span><a href="{{asset('/')}}">Inicio</a></span> / <span>Women</span></p>
                        </div>
                    </div>
                </div>
            </div>
        @show

        @section('breadcrumb2')
            <div class="breadcrumbs-two">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumbs-img" style="background-image: url({{asset('footwear/images/cover-img-1.jpg')}});">
                                <h2 style="color: white">Aseo</h2>
                            </div>
                            {{-- <div class="menu text-center">
                                <p><a href="#">New Arrivals</a> <a href="#">Best Sellers</a> <a href="#">Extended Widths</a> <a href="#">Sale</a></p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>            
        @show


        @section('content')
            <div class="colorlib-product">
                <div class="container">
                    <div class="row">

                        {{-- <div class="col-lg-3 col-xl-3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="side border mb-1">
                                        <h3>Brand</h3>
                                        <ul>
                                            <li><a href="#">Nike</a></li>
                                            <li><a href="#">Adidas</a></li>
                                            <li><a href="#">Merrel</a></li>
                                            <li><a href="#">Gucci</a></li>
                                            <li><a href="#">Skechers</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="side border mb-1">
                                        <h3>Size/Width</h3>
                                        <div class="block-26 mb-2">
                                            <h4>Size</h4>
                                    <ul>
                                        <li><a href="#">7</a></li>
                                        <li><a href="#">7.5</a></li>
                                        <li><a href="#">8</a></li>
                                        <li><a href="#">8.5</a></li>
                                        <li><a href="#">9</a></li>
                                        <li><a href="#">9.5</a></li>
                                        <li><a href="#">10</a></li>
                                        <li><a href="#">10.5</a></li>
                                        <li><a href="#">11</a></li>
                                        <li><a href="#">11.5</a></li>
                                        <li><a href="#">12</a></li>
                                        <li><a href="#">12.5</a></li>
                                        <li><a href="#">13</a></li>
                                        <li><a href="#">13.5</a></li>
                                        <li><a href="#">14</a></li>
                                    </ul>
                                    </div>
                                    <div class="block-26">
                                            <h4>Width</h4>
                                    <ul>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">W</a></li>
                                    </ul>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="side border mb-1">
                                        <h3>Style</h3>
                                        <ul>
                                            <li><a href="#">Slip Ons</a></li>
                                            <li><a href="#">Boots</a></li>
                                            <li><a href="#">Sandals</a></li>
                                            <li><a href="#">Lace Ups</a></li>
                                            <li><a href="#">Oxfords</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="side border mb-1">
                                        <h3>Colors</h3>
                                        <ul>
                                            <li><a href="#">Black</a></li>
                                            <li><a href="#">White</a></li>
                                            <li><a href="#">Blue</a></li>
                                            <li><a href="#">Red</a></li>
                                            <li><a href="#">Green</a></li>
                                            <li><a href="#">Grey</a></li>
                                            <li><a href="#">Orange</a></li>
                                            <li><a href="#">Cream</a></li>
                                            <li><a href="#">Brown</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="side border mb-1">
                                        <h3>Material</h3>
                                        <ul>
                                            <li><a href="#">Leather</a></li>
                                            <li><a href="#">Suede</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="side border mb-1">
                                        <h3>Technologies</h3>
                                        <ul>
                                            <li><a href="#">BioBevel</a></li>
                                            <li><a href="#">Groove</a></li>
                                            <li><a href="#">FlexBevel</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        
                        <div class="col-lg-12 col-xl-12">
                            <div class="row row-pb-md">

                                <div class="col-lg-3 mb-3 text-center">
                                    <div class="product-entry border">
                                        <a href="#" class="prod-img">
                                            <img src="{{asset('footwear\images\item-1.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                        </a>
                                        <div class="desc">
                                            <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                            <span class="price">$139.00</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 mb-3 text-center">
                                    <div class="product-entry border">
                                        <a href="#" class="prod-img">
                                            <img src="{{asset('footwear\images\item-2.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                        </a>
                                        <div class="desc">
                                            <h2><a href="#">Women's Minam Meaghan</a></h2>
                                            <span class="price">$139.00</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 mb-3 text-center">
                                    <div class="product-entry border">
                                        <a href="#" class="prod-img">
                                            <img src="{{asset('footwear\images\item-3.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                        </a>
                                        <div class="desc">
                                            <h2><a href="#">Men's Taja Commissioner</a></h2>
                                            <span class="price">$139.00</span>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- <div class="w-100"></div> --}}
                                
                                <div class="col-lg-3 mb-3 text-center">
                                    <div class="product-entry border">
                                        <a href="#" class="prod-img">
                                            <img src="{{asset('footwear\images\item-4.jpg')}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                        </a>
                                        <div class="desc">
                                            <h2><a href="#">Russ Men's Sneakers</a></h2>
                                            <span class="price">$139.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3 text-center">
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
                                <div class="col-lg-3 mb-3 text-center">
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
                                {{-- <div class="w-100"></div> --}}
                                <div class="col-lg-3 mb-3 text-center">
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
                                <div class="col-lg-3 mb-3 text-center">
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
                                <div class="col-lg-3 mb-3 text-center">
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
                                {{-- <div class="w-100"></div> --}}
                                <div class="col-lg-3 mb-3 text-center">
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
                                <div class="col-lg-3 mb-3 text-center">
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
                                <div class="col-lg-3 mb-3 text-center">
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
                                {{-- <div class="w-100"></div> --}}
                                <div class="col-lg-3 mb-3 text-center">
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
                                <div class="col-lg-3 mb-3 text-center">
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
                                <div class="col-lg-3 mb-3 text-center">
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
                                <div class="col-lg-3 mb-3 text-center">
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
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="block-27">
                                <ul>
                                    <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                                </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @show
        
        @section('marcas')
            <div class="colorlib-partner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                            <h2>Nuestras Marcas</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col partner-col text-center">
                            <img src="images\brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                        </div>
                        <div class="col partner-col text-center">
                            <img src="images\brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                        </div>
                        <div class="col partner-col text-center">
                            <img src="images\brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                        </div>
                        <div class="col partner-col text-center">
                            <img src="images\brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                        </div>
                        <div class="col partner-col text-center">
                            <img src="images\brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                        </div>
                    </div>
                </div>
            </div>
        @show

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

