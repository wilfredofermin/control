<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Encabezado de pagina-->
    <title>{{ config('app.name', 'Laravel') }}{{' - '}}@yield('titulo')</title>

    <!-- Floating Action Button | http://propeller.in/components/floating-button.php-->
    <link rel="stylesheet" href="{{asset('dist/css/floating.css')}}">
    <!-- Favicon-->
    <link rel="icon" href="{{asset('material/favicon.ico')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- font awesome | http://fontawesome.io  -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Iconos Elegant -->
    <link rel="stylesheet" href="{{asset('css/elegant-icons-style.css')}}">

    <!-- Bootstrap Core Css -->
    <link rel="stylesheet" href="{{asset('material/plugins/bootstrap/css/bootstrap.css')}}">

    <!-- Waves Effect Css -->
    <link rel="stylesheet" href="{{asset('material/plugins/node-waves/waves.css')}}">

    <!-- Bootstrap Material Datetime Picker Css -->
    <link rel="stylesheet" href="{{asset('material/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}">

    <!-- Wait Me Css -->
    <link rel="stylesheet" href="{{asset('material/plugins/waitme/waitMe.css')}}">

    <!-- Range Slider Css | http://ionden.com/a/plugins/ion.rangeSlider/demo.html-->
    <link rel="stylesheet" href="{{asset('material/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('material/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css')}}">

    <!-- Toastr CSS-->
    <link rel="stylesheet" href="{{asset('dist/css/toastr.css')}}">

    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="{{asset('material/plugins/bootstrap-select/css/bootstrap-select.css')}}">

    <!-- Animation Css -->
    <link rel="stylesheet" href="{{asset('material/plugins/animate-css/animate.css')}}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('material/css/style.css')}}">

    <!-- SweetAlert2 |https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.css -->
    <link rel="stylesheet" href="{{asset('dist/css/sweetalert2.css')}}">



    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link rel="stylesheet" href="{{asset('material/css/themes/all-themes.css')}}">

    <!-- File Input Bootstrap | https://github.com/kartik-v/bootstrap-fileinput-->
    <link rel="stylesheet" href="{{asset('css/fileinput.min.css')}}">


</head>
{{--Color del templete segun su rol--}}
@if (Auth::user()->is_admin)
<body class="theme-green">
  @elseif(Auth::user()->is_support)
    <body class="theme-blue">
    @elseif(Auth::user()->is_evaluador)
        <body class="theme-purple">
    @else
        <body class="theme-orange">
@endif
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Espere...</p>
    </div>
</div>
<!-- #END# Page Loader -->

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
@yield('search')
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{asset('/home')}}">ADMINBS - @yield('titulo')</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                @yield('call_search')
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="label-count">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>12 new members joined</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 14 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-cyan">
                                            <i class="material-icons">add_shopping_cart</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>4 sales made</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 22 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red">
                                            <i class="material-icons">delete_forever</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy Doe</b> deleted account</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-orange">
                                            <i class="material-icons">mode_edit</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy</b> changed name</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 2 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue-grey">
                                            <i class="material-icons">comment</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> commented your post</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 4 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">cached</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> updated status</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-purple">
                                            <i class="material-icons">settings</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>Settings updated</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> Yesterday
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
                <!-- Tasks -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">flag</i>
                        <span class="label-count">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">TASKS</li>
                        <li class="body">
                            <ul class="menu tasks">
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Footer display issue
                                            <small>32%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Make new buttons
                                            <small>45%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Create new dashboard
                                            <small>54%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Solve transition issue
                                            <small>65%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Answer GitHub questions
                                            <small>92%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                @if (Auth::user()->is_admin)

                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">

                <img src="{{asset('images/users/'.Auth::user()->avatar)}}" id="avatarImage" width="48px" class="img-circle" alt="User Image" >
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}@include('includes.asset.role')</div>
                <div class="email">{{Auth::user()->email}}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="{{URL::action('ProfileController@edit',Auth::user()->id )}}"><i class="material-icons">person</i>Perfil</a></li>
                        <li role="seperator" class="divider"></li>
                        @if (Auth::user()->role<2)
                            <li><a href="{{url('/user')}}"><i class="material-icons">group</i>Usuarios</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                        @endif
                        <!-- SweetAlert | Condiciones para mensajes -->
                        @include('includes.notifications.sweetalert_despedida')

                        <li><a id='salir' href="javascript:void(0);"><i class="material-icons">input</i>Salir</a></li>
                        <!--Cuando es confirmado llamo este formulario desde el SweetAlert mediante el id="logout-form"-->
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MENU PRINCIPAL</li>
                <li class="active">
                    <a href="{{url('/home')}}">
                        <i class="material-icons">home</i>
                        <span>Inicio</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                <strong><a href="#">Body Shop Athletic Club</a> &copy; 2017 </strong>
            </div>
            <div class="version">
                <strong>Powered by</strong><a href="http://about.me/wilfredofermin" target="_blank" title="Desarrollo por WILFREDO FERMIN"> WFDS</a>
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->

    <!-- #END# Right Sidebar -->

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            @if (count($errors) > 0)
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <div align="center">
                            <h3 class="panel-title"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Dato(S) invalido(S)</strong></h3>
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
            @yield('content')

        </div>
    </div>
</section>



<!-- Jquery Core Js -->
<script src="{{asset('material/plugins/jquery/jquery.min.js')}}"></script>

{{--File Input Bootstrap | https://github.com/kartik-v/bootstrap-fileinput | http://krajee.com/ --}}
<script src="{{asset('js/fileinput.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
<script src="{{asset('js/es_file_Input.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('material/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('material/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('material/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- RangeSlider Plugin Js | http://ionden.com/a/plugins/ion.rangeSlider/en.html-->
<script src="{{asset('material/plugins/ion-rangeslider/js/ion.rangeSlider.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('material/plugins/node-waves/waves.js')}}"></script>

<!-- Toastr Notification | http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js -->
<script src="{{asset('dist/js/toastr.min.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('material/js/admin.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('material/js/demo.js')}}"></script>

{{--SweeAlert2 | https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.js --}}
<script src="{{asset('dist/js/sweetalert2.js')}}"></script>

<!-- SweetAlert | Condiciones para mensajes -->
@include('includes.notifications.toastr_notifications')

    {{--Input para cargar imagen Nuevo --}}
    <script>
        // initialize with defaults
        $("#input-id").fileinput(
            {
                language: 'es', //Con esto le cambio el idioma

                initialPreviewConfig: [
                    {
                        image: {width: "auto", height: "160px"},
                        caption: 'default.png',
                    },

                ]
            }
        );
        // with plugin options
        $("#input-id").fileinput(
            {
            'showUpload':false,
            'previewFileType':'any',
             'allowedFileExtensions': ['jpg', 'png', 'gif']
            }
        );

    </script>
    {{--Input para cargar imagen PROFILE --}}
    <script>
        // initialize with defaults
        $("#input-profile").fileinput(
            {
                language: 'es', //Con esto le cambio el idioma
                image: {width: "auto", height: "160px"},
                initialPreview: [
                    "<img src='/images/users/{{Auth::user()->avatar}}' class='file-preview-image' alt='default' title='default'>"
                ],

            }
        );
        // with plugin options
        $("#input-profile").fileinput(
            {
                'showUpload':false,
                'previewFileType':'any',
                'allowedFileExtensions': ['jpg', 'png', 'gif']
            }
        );

    </script>
    <script>
        // initialize with defaults
        $("#input-edit").fileinput(
            {
                language: 'es', //Con esto le cambio el idioma
                image: {width: "auto", height: "160px"},
                initialPreview: [
                    "<img src='/images/users/avatar' class='file-preview-image' alt='default' title='default'>"
                ],

            }
        );
        // with plugin options
        $("#input-profile").fileinput(
            {
                'showUpload':false,
                'previewFileType':'any',
                'allowedFileExtensions': ['jpg', 'png', 'gif']
            }
        );

    </script>

    {{--TAB del Formulario Modal Agregar --}}
    <script>
        $(document).ready(function() {
            $(".btn-pref .btn").click(function () {
                $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
                // $(".tab").addClass("active"); // instead of this do the below
                $(this).removeClass("btn-default").addClass("btn-primary");
            });
        });
    </script>

    {{--SELECCION EN EL INDEX --}}
    <script>
        $(document).ready(function() {
            $(document).on('click', '.ourItem',function (event) {
                $(this).click(function (event) {

                    $('#myModaledit').appendTo("body").modal('show');
                })
            })
        });
    </script>

    {{--Rango seleccion Roles de Acceso |https://github.com/IonDen/ion.rangeSlider --}}

   {{--
    <script>
        $("#role").ionRangeSlider({
            grid: true,
            from:'{{ old('role') }}',
            prefix: "Rol ",
            values: [
                0, 1, 2,
               3
            ]
        });
    </script>

   --}}

</body>

</html>