@extends('admin.dashboard')

    @section('headers')
        <!-- Jquery Toast css -->
        <link href="{{asset('high/assets/libs/jquery-toast/jquery.toast.min.css')}}" rel="stylesheet" type="text/css" />
    @endsection

    @section('breadcrumb')
        <h4 class="page-title-main">Empresa</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/admin')}}">Inicio</a></li>
            {{-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> --}}
            <li class="breadcrumb-item active">Empresa</li>
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
                            <h4 class="header-title">Datos básicos empresa</h4>
                            
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div>
                                        <form class="form-horizontal" role="form" action="{{asset('/admin/empresa/guardar')}}" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="nombre">Nombre</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="nombre" id="nombre" value="{{$empresa->nombre}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="eslogan">Eslogan</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="eslogan" id="eslogan" value="{{$empresa->eslogan}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="nit">Nit</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="nit" id="nit" value="{{$empresa->nit}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="direccion">Dirección</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="direccion" id="direccion" value="{{$empresa->direccion}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="barrio">Barrio</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="barrio" id="barrio" value="{{$empresa->barrio}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="departamento">Departamento</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="departamento" id="departamento" value="{{$empresa->departamento}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="ciudad">Ciudad</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="ciudad" id="ciudad" value="{{$empresa->ciudad}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="pais">Pais</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="pais" id="pais" value="{{$empresa->pais}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="pbx">PBX</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="pbx" id="pbx" value="{{$empresa->pbx}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="telefono">Telefono</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="telefono" id="telefono" value="{{$empresa->telefono}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="celular">Celular</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="celular" id="celular" value="{{$empresa->celular}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="fax">Fax</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="fax" id="fax" value="{{$empresa->fax}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="email">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" name="email" id="email" value="{{$empresa->email}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="whatsapp">Whatsapp</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="whatsapp" id="whatsapp" value="{{$empresa->whatsapp}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="facebook">Facebook</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="facebook" id="facebook" value="{{$empresa->facebook}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="instagram">Instagram</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="instagram" id="instagram" value="{{$empresa->instagram}}" class="form-control">
                                                </div>
                                            </div>
                                            {{-- ocultos --}}
                                            <input type="hidden" name="id" id="id" value="{{$empresa->id}}">
                                            <div class="form-group text-right mb-0">
                                                <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                    Guardar
                                                </button>
                                                <a href="{{asset('/admin')}}" class="btn btn-light waves-effect">Regresar</a>
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
    
        <script src="{{ asset('high/assets/libs/jquery-toast/jquery.toast.min.js') }}"></script>
        <!-- toastr init js-->
        <script src="{{ asset('high/assets/js/pages/toastr.init.js') }}"></script>

        <script>
            // $(document).ready(function() {
            //     $.toast({
            //         heading:"Heads up!",
            //         text:"This alert needs your attention, but it is not super important.",
            //         position:"top-right",
            //         loaderBg:"#3b98b5",
            //         icon:"info",
            //         hideAfter:3e3,
            //         stack:1
            //     })
            // });

            /* success  loaderBg:"#5ba035",icon:"success" */
        </script>

    @endsection