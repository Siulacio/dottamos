@extends('admin.dashboard')

    @section('breadcrumb')
        <h4 class="page-title-main">Categoria</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/admin')}}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{asset('/admin/categorias')}}">Listado Categorias</a></li>
            <li class="breadcrumb-item active">Nueva Categoria</li>
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
                            <h4 class="header-title">Datos básicos Categoría</h4>
                            
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div>
                                        <form class="form-horizontal" role="form" action="{{asset('/admin/categorias/guardar')}}" method="POST">
                                            @csrf
                                            {{-- FORMULARIO CATEGORIAS --}}
                                            @include('admin.categorias.form_categoria')
                                            
                                            <div class="form-group text-right mb-0">
                                                <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                    Guardar
                                                </button>
                                                <a href="{{asset('/admin/categorias')}}" class="btn btn-light waves-effect">Regresar</a>
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