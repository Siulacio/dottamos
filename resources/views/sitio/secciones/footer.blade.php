<footer id="colorlib-footer" role="contentinfo">
    <div class="container">
        <div class="row row-pb-md">

            <div class="col footer-col colorlib-widget">
                {{-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                <p> --}}
                    {{-- <ul class="colorlib-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul> --}}
                <img src="{{asset('img/logo.png')}}" width="250" alt="">
                <br>
                <strong style="font-size: 1.5em">{{$empresa->nombre}}</strong> <br>  
                {{$empresa->eslogan}}
                
            </div>

            {{-- <div class="col footer-col colorlib-widget">
                <h4>Customer Care</h4>
                <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Returns/Exchange</a></li>
                        <li><a href="#">Gift Voucher</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Special</a></li>
                        <li><a href="#">Customer Services</a></li>
                        <li><a href="#">Site maps</a></li>
                    </ul>
                
            </div> --}}

            <div class="col footer-col colorlib-widget">
                <h4>Enlaces</h4>
                <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="{{asset('/nosotros')}}">Nosotros</a></li>
                        <li><a href="{{asset('/contacto')}}">Contactenos</a></li>
                        <li><a href="{{asset('/catalogo/aseo')}}">Catálogo Aseo</a></li>
                        <li><a href="{{asset('/catalogo/salud')}}">Catálogo Salud</a></li>
                        <li><a href="{{asset('/catalogo/papeleria')}}">Catálogo Papelería</a></li>
                    </ul>
                
            </div>

            {{-- <div class="col footer-col">
                <h4>News</h4>
                <ul class="colorlib-footer-links">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Exhibitions</a></li>
                </ul>
            </div> --}}

            {{-- <p> <a href="tel://1234567920">+ 1235 2355 98</a></p> --}}

            <div class="col footer-col">
                <h4>Información Contacto</h4>
                <ul class="colorlib-footer-links">
                    <li> <span class="mr-2"><i class="icon-phone3"></i></span>{{$empresa->telefono .' - '. $empresa->celular}}</li>
                    <li> <span class="mr-2"><i class="icon-paperplane"></i></span> {{$empresa->email}}</li>
                    <li> <span class="mr-2"><i class="icon-globe"></i></span> www.dottamos.com</li>
                    {{-- <li><a href="#">yoursite.com</a></li> --}}
                </ul>
            </div>
            
        </div>
    </div>
    <div class="copy">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>
                    <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dottamos | Powered by Siulsoft
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
                    {{-- <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span> --}}
                </p>
            </div>
        </div>
    </div>
</footer>