<div class="row">
    <div class="col-sm-12 text-left menu-1">
        <ul>
            <li class="active"><a href="{{asset('/')}}">Inicio</a></li>
            <li><a href="{{asset('/nosotros')}}">Nosotros</a></li>
            {{-- <li class="has-dropdown">
                <a href="men.html">Nosotros</a>
                <ul class="dropdown">
                    <li><a href="product-detail.html">VISIÓN</a></li>
                    <li><a href="cart.html">MISIÓN</a></li>
                </ul>
            </li> --}}

            <li class="has-dropdown">
                <a href="#">Catálogos</a>
                <ul class="dropdown">
                    <li><a href="{{asset('/catalogo/aseo')}}">ASEO</a></li>
                    <li><a href="{{asset('/catalogo/papeleria')}}">PAPELERÍA</a></li>
                    <li><a href="{{asset('/catalogo/salud')}}">SALUD</a></li>
                </ul>
            </li>

            <li><a href="{{asset('/contacto')}}">CONTÁCTENOS</a></li>
            {{-- <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li> --}}
            {{-- <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a></li> --}}
        </ul>
    </div>
</div>