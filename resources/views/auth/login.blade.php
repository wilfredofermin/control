<!DOCTYPE html>
<!--Desarrollado por Wilfredo Fermin R. | wilfredofermin@hotmail.com | about.me/wilfredofermin | facebook -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

    <title>Login | RH Control - Sistema administrativo</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('css/elegant-icons-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- Custom styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
    <!-- Material Design |http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html-->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-material-design.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/ripples.min.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form"  method="POST" action="{{ url('login') }}">
        {{ csrf_field() }}
        <div class="well">
            @if (count($errors) > 0)
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <div align="center">
                            <h3 class="panel-title"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Dato invalido</strong></h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
                <p class="login-img">
                <div align="center" class="center-block"><img src="img/logo.png" class="img-rounded" alt="logo-app" width="207" height="210"></div>
                </p>
            <div class="form-group label-floating">
                <label for="i5" class="control-label"><i class="icon_profile"></i> Email</label>
                <input type="email" class="form-control"  id="i5" name="email" value="{{ old('email') }}" required autofocus>
                <span class="help-block">Introduzca su correo electronico</span>
            </div>



            <div class="form-group label-floating">
                <label for="i5" class="control-label"><i class="icon_key_alt"></i> Password</label>
                <input type="password" class="form-control"  id="i5" name="password" value="{{ old('password') }}" required>
                <span class="help-block">Introduzca su passwords</span>
            </div>

            <br>

            </label>
            <button class="btn btn-primary btn-lg btn-block btn-raised " type="submit"><i class="fa fa-check-square-o" aria-hidden="true"></i> Acceso</button>
            <!-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
        </div>

        <div align="center" class="center-block"><h6>&copy Body Shop Athletic Club | WFDS</h6></div>

    </form>

</div>
<!-- jQuery 2.2.3 -->
<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Material Desing for Bootstrap | http://fezvrasta.github.io/bootstrap-material-design/ -->
<script src="{{asset('dist/js/material.min.js')}}"></script>
<script src="{{asset('dist/js/ripples.min.js')}}"></script>
<script>
    $.material.init()
</script>

</body>
</html>
