@extends('sitio.paginas.catalogo_template')

@section('breadcrumb')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="{{asset('/')}}">Inicio</a></span> / <span>{{$categoria->nombre}}</span></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('breadcrumb2')
<div class="breadcrumbs-two">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs-img" style="background-image: url({{asset('footwear/images/cover-img-1.jpg')}});">
                    <h2 style="color: white">{{$categoria->nombre}}</h2>
                </div>
                {{-- <div class="menu text-center">
                    <p><a href="#">New Arrivals</a> <a href="#">Best Sellers</a> <a href="#">Extended Widths</a> <a href="#">Sale</a></p>
                </div> --}}
                <div class="text-center">
                    {{-- <p><a href="#">New Arrivals</a> <a href="#">Best Sellers</a> <a href="#">Extended Widths</a> <a href="#">Sale</a></p> --}}
                    <p style="font-size: 1.5em"> <strong> Ponemos a su disposición gran variedad de elementos de papelería y  mobiliarios de oﬁcina, respaldados por marcas reconocidas, lo que ofrece  tranquilidad al momento de realizar sus compras.</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>            
@endsection


@section('content')
    <div class="colorlib-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="row row-pb-md">

                        @foreach ($productos as $producto)
                            <div class="col-lg-3 mb-3 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <img src="{{asset('img/productos/'.$producto->imagen)}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#">{{$producto->nombre}}</a></h2>
                                        <span class="price">${{$producto->precio}}</span>
                                    </div>
                                </div>
                            </div>                            
                        @endforeach                      


                    </div>
                </div>
            </div>

            {{-- <div class="row">
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
            </div> --}}

            {{-- {{$productos->links()}} --}}

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="block-27">
                        {{-- {{$productos->links()}} --}}
                        {{$productos->links('vendor.pagination.default')}}                       

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection


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
                    <img src="{{asset('img/marcas/papeleria/norma.png')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{asset('img/marcas/papeleria/sharpie.png')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{asset('img/marcas/papeleria/reprograf.png')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{asset('img/marcas/papeleria/papermate.png')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
                <div class="col partner-col text-center">
                    <img src="{{asset('img/marcas/papeleria/fabercastell.png')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
                </div>
            </div>
        </div>
    </div>
@endsection