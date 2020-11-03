<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Dottamos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('high/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('high/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('high/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-pages">

            <!-- Begin page -->
            <div class="accountbg" style="background: url('{{asset ('high/assets/images/bg-1.jpg') }}');background-size: cover;background-position: center;"></div>
    
            <div class="wrapper-page account-page-full">
    
                <div class="card shadow-none">
                    <div class="card-block">
    
                        <div class="account-box">
    
                            <div class="card-box shadow-none p-4 mt-2">
                                <h2 class="text-uppercase text-center pb-3">
                                    <a href="#" class="text-success">
                                        {{-- <span><img src="{{ asset('high/assets/images/logo-dark.png') }}" alt="" height="26"></span> --}}
                                        <span><img src="{{ asset('img/logo.png') }}" alt="" height="50"></span>
                                    </a>
                                </h2>
    
                                <form class="" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="emailaddress">Usuario</label>
                                            <input class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" type="text" id="username" name="username" required="" placeholder="Ingrese su Usuario" autofocus>
                                            
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="password">Contraseña</label>
                                            <input class="form-control @error('password') is-invalid @enderror" type="password" required="" id="password" name="password" placeholder="Ingrese su Contraseña">
                                            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
    
    
                                    <div class="form-group row text-center">
                                        <div class="col-12">
                                            <button class="btn btn-block btn-primary waves-effect waves-light" type="submit">Ingresar</button>
                                        </div>
                                    </div>
    
                                </form>
    
    
                            </div>
                        </div>
    
                    </div>
                </div>
    
                <div class="text-center">
                    <p class="account-copyright">2020 © Siulsoft. <span class="d-none d-sm-inline-block"></span></p>
                </div>
    
            </div>
    
        <!-- Vendor js -->
        <script src="{{ asset('high/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('high/assets/js/app.min.js') }}"></script>
        
    </body>
</html>
























{{-- 

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
