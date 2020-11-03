@extends('admin.dashboard')

    @section('breadcrumb')
        <h4 class="page-title-main">Usuarios</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/admin')}}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{asset('/admin/usuarios')}}">Listado Usuarios</a></li>
            <li class="breadcrumb-item active">Nuevo Usuario</li>
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
                            <h4 class="header-title">Datos básicos Usuarios</h4>
                            
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div>
                                        <form class="form-horizontal" role="form" action="{{asset('/admin/usuarios/guardar')}}" method="POST">
                                            @csrf
                                            {{-- FORMULARIO CATEGORIAS --}}
                                            @include('admin.usuarios.form_usuario')
                                            
                                            <div class="form-group text-right mb-0">
                                                <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                    Guardar
                                                </button>
                                                <a href="{{asset('/admin/usuarios')}}" class="btn btn-light waves-effect">Regresar</a>
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