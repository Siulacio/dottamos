<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{asset('/admin')}}" class="logo">
                <span class="logo-lg">
                    {{-- <img src="{{asset('high/assets/images/logo-dark.png')}}" alt="" height="22"> --}}
                    <img src="{{asset('img/logo.png')}}" alt="" height="30">
                    <!-- <span class="logo-lg-text-light">Highdmin</span> -->
                </span>
                <span class="logo-sm">
                    <!-- <span class="logo-sm-text-dark">H</span> -->
                    <img src="{{asset('high/assets/images/logo-sm.png')}}" alt="" height="24">
                </span>
            </a>
        </div>

        <!-- User box -->
        <div class="user-box">
            {{-- <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle" height="48"> --}}
            <div class="dropdown">
                <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{Auth::user()->nombres}}</a>
            </div>
            <p class="text-muted">Administrador</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">
        
                <li>
                    <a href="{{asset('/admin')}}">
                        <i class="fe-airplay"></i>
                        <span> Inicio </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-box"></i>
                        <span>  Productos  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{asset('/admin/productos')}}">Productos</a></li>
                        <li><a href="{{asset('/admin/categorias')}}">Categorias</a></li>
                    </ul>
                </li>
        
                <li>
                    <a href="javascript: void(0);">
                        <i class="icon-user"></i>
                        <span> Usuarios </span>
                        <span class="menu-arrow"></span>
                    </a>
        
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{asset('/admin/usuarios')}}">Usuarios</a></li>
                    </ul>
                </li>
        
                <li>
                    <a href="javascript: void(0);">
                        <i class="icon-home"></i>
                        <span> Empresa </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{asset('/admin/empresa')}}">Empresa</a></li>
                    </ul>
                </li>
               
            </ul>
        
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>