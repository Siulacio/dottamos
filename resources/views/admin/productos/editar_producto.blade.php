@extends('admin.dashboard')

    @section('headers')
    <link href="{{asset('high/assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
    @endsection

    @section('breadcrumb')
        <h4 class="page-title-main">Producto</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/admin')}}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{asset('/admin/productos')}}">Listado Productos</a></li>
            <li class="breadcrumb-item active">Editar Producto</li>
        </ol>                                    
    @endsection

    @section('content')
        @include('admin.secciones.errores')
        @include('admin.secciones.exitoso')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title">Datos básicos Productos</h4>
                            
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div>
                                        <form class="form-horizontal" role="form" action="{{asset('/admin/productos/actualizar')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            {{-- FORMULARIO CATEGORIAS --}}
                                            @include('admin.productos.form_producto')
                                            
                                            <div class="form-group text-right mb-0">
                                                <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                    Actualizar
                                                </button>
                                                <a href="{{asset('/admin/productos')}}" class="btn btn-light waves-effect">Regresar</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>        
    @endsection

    @section('imports')
        <script src="{{asset('high/assets/libs/switchery/switchery.min.js')}}"></script>
        <!-- Init js-->
        <script src="{{asset('high/assets/js/pages/form-advanced.init.js')}}"></script>
    @endsection