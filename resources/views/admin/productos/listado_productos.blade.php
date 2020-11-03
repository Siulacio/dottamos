@extends('admin.dashboard')

    @section('headers')
        <!-- third party css -->
        <link href="{{ asset('high/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('high/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('high/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('high/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    @endsection

    @section('breadcrumb')
        <h4 class="page-title-main">Productos</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/admin')}}">Inicio</a></li>
            {{-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> --}}
            <li class="breadcrumb-item active">Listado Productos</li>
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
                            <h4 class="header-title">Listado productos</h4>
                            
                            <div class="row mt-3">
                                <a href="{{asset('/admin/productos/nuevo')}}" class="btn btn-primary waves-effect waves-light ml-2">Nuevo Producto</a>

                                <div class="col-12 mt-3">
                                    <div>

                                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Categoria</th>
                                                    <th>Precio</th>
                                                    <th>Orden</th>
                                                    <th><center>Estado</center></th>
                                                    <th width="10%"><center>Acciones</center></th>
                                                </tr>
                                            </thead>    
    
                                            <tbody>
                                                {{-- @foreach ($categorias as $categoria)
                                                    <tr>
                                                        <td>{{$categoria->nombre}}</td>
                                                        <td>{{$categoria->descripcion}}</td>
                                                        <td>{{$categoria->orden}}</td>
                                                        <td align="center">{!! ($categoria->estado == 1) ? '<span class="badge badge-primary">Activo</span>' : '<span class="badge badge-danger">Inactivo</span>' !!}</td>
                                                        <td style="">
                                                            <div class="btn-group dropdown">
                                                                <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(39px, 28px, 0px);">
                                                                    <a class="dropdown-item" href="{{ asset('/admin/categorias/editar/'.$categoria->id) }}"><i class="icon-note mr-2 text-muted font-18 vertical-middle" title="Editar"></i>Editar</a>
                                                                    <a class="dropdown-item" href="{{ asset('/admin/categorias/activacion/'.$categoria->id) }}">{!! ($categoria->estado == 1) ? '<i class="icon-close mr-2 text-muted font-18 vertical-middle" title="Inactivar"></i> Inactivar' : '<i class="icon-check mr-2 text-muted font-18 vertical-middle" title="Activar"></i> Activar' !!}</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach --}}
                                    
                                            </tbody>

                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>   
        
        {{-- componente modal ver imagen --}}
        @component('admin.secciones.modal_imagenes')
            @slot('titulo')
                <span id="titulo"></span>
            @endslot        
            @slot('mensaje')
                <div id="mensaje" class=""></div>
            @endslot       
        @endcomponent

    @endsection

    @section('imports')
        <!-- Required datatable js -->
        <script src="{{ asset('high/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('high/assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('high/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('high/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('high/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('high/assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('high/assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('high/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('high/assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('high/assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('high/assets/libs/datatables/buttons.print.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('high/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('high/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        

        <script>
            $(document).ready( function () {
                $('#responsive-datatable').DataTable({
                    language:{ url: "{{ asset('high/assets/libs/datatables/Spanish.json') }}" },
                    "serverSide":true,
                    "ajax": "{{ url('/admin/productos') }}",
                    "columns":[
                        {data:'nombre'},
                        {data: 'descripcion'},
                        {data: 'categorias.nombre'},
                        {data: 'precio'},
                        {data: 'orden'},
                        {data: 'estado'},
                        {data:'btn'}
                    ],
                });
            } );

        //ver página en modal
        $(document).on('click', '.ver', function(event){
            var tr = this;
            var id = $(this).attr("id");
            var token = $("#token").val();
            var route = "{{asset('/admin/productos/ver')}}"+'/'+id;
            // $("#myModalVer").modal("show");


            $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN':token},
                type:'GET',
                dataType: 'json',
                success:function(resp){
                    $("#titulo").html(resp.nombre);
                    // $("#mensaje").html(resp.imagen);
                    $("#img_producto").attr('src','{{asset("img/productos")}}'+'/'+resp.imagen);
                    $("#mensaje").html(resp.descripcion);

                    $("#myModalVer").modal("show");
                },
                error:function(msg){
                    alert('fallo al cargar imágen');
                }
            });
        });
        </script>
    @endsection