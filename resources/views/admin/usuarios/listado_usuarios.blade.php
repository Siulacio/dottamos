@extends('admin.dashboard')

    @section('headers')
        <!-- third party css -->
        <link href="{{ asset('high/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('high/assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('high/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('high/assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    @endsection

    @section('breadcrumb')
        <h4 class="page-title-main">Usuarios</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/admin')}}">Inicio</a></li>
            {{-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> --}}
            <li class="breadcrumb-item active">Listado Usuarios</li>
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
                            <h4 class="header-title">Listado Usuarios</h4>
                            
                            <div class="row mt-3">
                                <a href="{{asset('/admin/usuarios/nuevo')}}" class="btn btn-primary waves-effect waves-light ml-2">Nuevo Usuario</a>

                                <div class="col-12 mt-3">
                                    <div>

                                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Usuario</th>
                                                    <th>Nombres</th>
                                                    <th>Email</th>
                                                    <th>Estado</th>
                                                    <th width="10%">Acciones</th>
                                                </tr>
                                            </thead>    
    
                                            <tbody>
                                                @foreach ($usuarios as $usuario)
                                                    <tr>
                                                        <td>{{$usuario->username}}</td>
                                                        <td>{{$usuario->nombres}}</td>
                                                        <td>{{$usuario->email}}</td>
                                                        <td align="center">{!! ($usuario->estado == 1) ? '<span class="badge badge-primary">Activo</span>' : '<span class="badge badge-danger">Inactivo</span>' !!}</td>
                                                        <td style="">
                                                            <div class="btn-group dropdown">
                                                                <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(39px, 28px, 0px);">
                                                                    <a class="dropdown-item" href="{{ asset('/admin/usuarios/editar/'.$usuario->id) }}"><i class="icon-note mr-2 text-muted font-18 vertical-middle" title="Editar"></i>Editar</a>
                                                                    <a class="dropdown-item" href="{{ asset('/admin/usuarios/activacion/'.$usuario->id) }}">{!! ($usuario->estado == 1) ? '<i class="icon-close mr-2 text-muted font-18 vertical-middle" title="Inactivar"></i> Inactivar' : '<i class="icon-check mr-2 text-muted font-18 vertical-middle" title="Activar"></i> Activar' !!}</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                    
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
                    language:{
                        url: "{{ asset('high/assets/libs/datatables/Spanish.json') }}" 
                    }
                });
            } );
        </script>
    @endsection