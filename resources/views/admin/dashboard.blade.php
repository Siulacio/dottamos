<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        @yield('headers')
        <!-- App css -->
        <link href="{{asset ('high/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset ('high/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset ('high/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.secciones.menu')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topnav-menu float-right mb-0">
        
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="pro-user-name ml-1">
                                            {{Auth::user()->nombres}}  <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="fe-log-out"></i> <span>Salir</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        </ul>



                        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                            <li>
                                <button class="button-menu-mobile disable-btn">
                                    <i class="fe-menu"></i>
                                </button>
                            </li>

                            <li>
                                @section('breadcrumb')
                                    <h4 class="page-title-main">Bienvenido</h4>
                                    {{-- <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>                                     --}}
                                @show
                            </li>
        
                        </ul>
                    </div>
                    <!-- end Topbar -->



                @section('content')
                    <div class="content">                    
                        
                        <!-- Start Content-->
                        <div class="container-fluid">
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-box">
                                        <h4 class="header-title mb-3">WebAdmin</h4>

                                        <div class="row">

                                            <div class="col-md-12  col-xl-12">
                                                {{-- <div class="card-box mb-0 widget-chart-two shadow-none" dir="ltr">
                                                    <div class="float-right">
                                                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                            data-fgColor="#2d7bf4" value="60" data-skin="tron" data-angleOffset="180"
                                                            data-readOnly=true data-thickness=".1"/>
                                                    </div>
                                                    <div class="widget-chart-two-content">
                                                        <p class="text-muted mb-0 mt-2">Total Revenue</p>
                                                        <h3 class="">$32,540</h3>
                                                    </div>

                                                </div> --}}
                                                <img src="{{asset('img/logo.png')}}" width="100%" alt="">
                                                <br><br><br>
                                                <p>Estimado(a). <b>{{Auth::user()->nombres}}</b>. Muchas gracias por hacer uso de WebAdmin! Mediante esta plataforma podrás gestionar los contenidos de este sitio web</p>
                                            </div>

                                        </div>

                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->





                         

                            
                        </div> <!-- end container-fluid -->

                    </div> <!-- end content -->
                @show

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                            2020 &copy; Powered by Siulsoft
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            
         

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        {{-- <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <hr class="mt-0">
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />


                <div class="p-3">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                        <label class="custom-control-label" for="customCheck1">Notifications</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                        <label class="custom-control-label" for="customCheck2">API Access</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                        <label class="custom-control-label" for="customCheck4">Online Status</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">Auto Payout</label>
                    </div>
                </div>

                <!-- Messages -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">24</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Chadengle</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">13:40 PM</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                            <p class="inbox-item-date">13:34 PM</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date">13:17 PM</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                            <p class="inbox-item-date">12:20 PM</p>

                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">10:15 AM</p>

                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div> --}}
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('high/assets/js/vendor.min.js') }}"></script>


        <!-- Flot chart -->
        <script src="{{asset('high/assets/libs/flot-charts/jquery.flot.js') }}"></script>
        <script src="{{asset('high/assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
        <script src="{{asset('high/assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{asset('high/assets/libs/flot-charts/jquery.flot.resize.js') }}"></script>
        <script src="{{asset('high/assets/libs/flot-charts/jquery.flot.pie.js') }}"></script>
        <script src="{{asset('high/assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>
        <script src="{{asset('high/assets/libs/flot-charts/curvedLines.js') }}"></script>
        <script src="{{asset('high/assets/libs/flot-charts/jquery.flot.axislabels.js') }}"></script>

         <!-- KNOB JS -->
         <script src="{{asset('high/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

         <script src="{{asset('high/assets/js/pages/dashboard.init.js') }}"></script>


        <!-- App js -->
        <script src="{{asset('high/assets/js/app.min.js') }}"></script>

        @yield('imports')
        
    </body>
</html>