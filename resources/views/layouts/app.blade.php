
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.

MUCHOS DE LAS LIBRERIAS SE ENCUENTRAN EN ESTE SITIO
https://github.com/FezVrasta
-->
<html xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.css')}}">
  <!-- SweetAlert2 |https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.css -->
  <link rel="stylesheet" href="{{asset('dist/css/sweetalert2.css')}}">

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->

  <!-- Material Design |http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html-->
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap-material-design.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/ripples.min.css')}}">

  <!-- Toastr CSS-->
  <link rel="stylesheet" href="{{asset('dist/css/toastr.css')}}">

  <!-- Snckbars CSS-->
  <link rel="stylesheet" href="{{asset('dist/css/snackbar.min.css')}}">

  <!-- File Input Bootstrap | https://github.com/kartik-v/bootstrap-fileinput-->
  <link rel="stylesheet" href="{{asset('css/fileinput.min.css')}}">

  <!-- Dropdown | https://github.com/FezVrasta/dropdown.js/blob/master/jquery.dropdown.css-->
  <link rel="stylesheet" href="{{asset('dist/css/jquery.dropdown.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  {{--Theme LTE--}}
  <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
  <body class="hold-transition skin-blue   sidebar-collapse">
    <div class="wrapper">

    <!-- Main Header -->
        <header class="main-header">

          <!-- Logo -->
          <a href="{{ url('/home') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!--<img src="{{asset('img/icons/logo.png')}}" class="img-thumbnail" alt="Cinque Terre" width="50" height="50">-->
            <span class="logo-mini">
              <b>A</b>RH</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>RH</span>
          </a>
          <!-- Header Navbar -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                  <!-- Menu toggle button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                      <!-- inner menu: contains the messages -->
                      <ul class="menu">
                        <li><!-- start message -->
                          <a href="#">

                            <form action="{{url('profile/image')}}" method="POST" enctype="multipart/form-data" id="upload">
                              <img src="{{asset('images/users/'.Auth::user()->avatar)}}" id="avatarImage" width="24px" class="img-circle" alt="User Image" >
                            <div class="pull-left">
                            {{csrf_field()}}
                                <input type="file" style="display: none" id="avatarInput">
                              <!-- User Image -->
                             </div>

                            </form>
                            <!-- Message title and timestamp -->
                            <h4>
                              Support Team
                              <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <!-- The message -->
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <!-- end message -->
                      </ul>
                      <!-- /.menu -->
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                  </ul>
                </li>
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                  <!-- Menu toggle button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                      <!-- Inner Menu: contains the notifications -->
                      <ul class="menu">
                        <li><!-- start notification -->
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <!-- end notification -->
                      </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                  </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                  <!-- Menu Toggle Button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 9 tasks</li>
                    <li>
                      <!-- Inner menu: contains the tasks -->
                      <ul class="menu">
                        <li><!-- Task item -->
                          <a href="#">
                            <!-- Task title and progress text -->
                            <h3>
                              Design some buttons
                              <small class="pull-right">20%</small>
                            </h3>
                            <!-- The progress bar -->
                            <div class="progress xs">
                              <!-- Change the css width attribute to simulate progress -->
                              <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                      </ul>
                    </li>
                    <li class="footer">
                      <a href="#">View all tasks</a>
                    </li>
                  </ul>
                </li>
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                  <!-- Menu Toggle Button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    <img src="{{asset('images/users/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image" width="24" >
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">{{Auth::user()->name}}</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                      <img src="{{asset('images/users/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image" id="avatarImage">

                      <p>
                        <strong>{{Auth::user()->name}} </strong>
                        @include('includes.asset.role')

                      </p>
                      <br>
                    </li>

                    <!-- Menu Body -->
                    <li class="user-body">
                      <div class="row">
                        <div class="col-xs-12 text-center">
                          <a href="mailto:{{Auth::user()->email}}" class="btn btn-raised btn-block btn-xs"><i class="fa fa-envelope" aria-hidden="true"></i> {{Auth::user()->email}}</a>
                        </div>
                        <div class="col-xs-12 text-center">
                          <a href="javascript:void(0)" class="btn btn-raised btn-block btn-xs"><i class="fa fa-briefcase" aria-hidden="true"></i> {{Auth::user()->puesto}}</a>
                        </div>
                       </div>
                      <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">


                      <a class="btn btn-raised btn-info" href="{{URL::action('UserController@edit',Auth::user()->id )}}"><i class="fa fa-pencil-square-o"></i> Perfil</a>
                      <a id='salir' href="javascript:void(0)" class="btn btn-raised btn-danger"><i class="fa fa-power-off" aria-hidden="true"></i>Salir<div class="ripple-container"></div></a>

                      <div class="pull-right">
                       <!-- <a id='salir' href="#" class="btn-group-sm btn-toolbar"><i class="fa fa-power-off" aria-hidden="true"></i> Salir del Sistema</a>
                        <!--SweetAlert2-->
                       @include('includes.notifications.sweetalert_despedida')
                        <!--Cuando es confirmado llamo este formulario desde el SweetAlert mediante el id="logout-form"-->
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>

                      </div>
                    </li>
                  </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

              </ul>
            </div>
          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">

              <img src="{{asset('images/users/'.Auth::user()->avatar)}}" class="img-circle"  alt="Cinque Terre" height="auto">
            </div>
              <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
              @include('includes.asset.role')
              </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
            @if (Auth::user()->role==1)
            <li class="treeview">

              <a href="#"><i class="fa fa-link"></i> <span>Administrar</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>
              @endif
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Page Header
              <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
              <li class="active">Here</li>
            </ol>
          </section>

        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="box">

            @yield('content')
            <div class="box-body">

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div>
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      </div>
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          <strong>Powered by</strong><a href="http://about.me/wilfredofermin" target="_blank" title="Desarrollo por WILFREDO FERMIN"> WFDS</a>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2017 <a href="#">Company</a>.</strong> Derechos Reservados.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="pull-right-container">
                      <span class="label label-danger pull-right">70%</span>
                    </span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

          </div>
          <!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
          <!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Some information about this general settings option
                </p>
              </div>
              <!-- /.form-group -->
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
      </aside>
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>

  </div>
    <!-- ./wrapper -->




<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>



<!-- Material Desing for Bootstrap | http://fezvrasta.github.io/bootstrap-material-design/ -->
<script src="{{asset('dist/js/material.min.js')}}"></script>
<script src="{{asset('dist/js/ripples.min.js')}}"></script>

<!-- Toastr Notification | http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js -->
<script src="{{asset('dist/js/toastr.min.js')}}"></script>

<!-- Bootstrap 3.3.6 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

{{--SweeAlert2 | https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.js --}}
<script src="{{asset('dist/js/sweetalert2.js')}}"></script>

{{--Snackbar | https://github.com/FezVrasta/snackbarjs/tree/master/dist --}}
<script src="{{asset('dist/js/snackbar.min.js')}}"></script>

{{--File Input Bootstrap | https://github.com/kartik-v/bootstrap-fileinput | http://krajee.com/ --}}
<script src="{{asset('js/fileinput.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
<script src="{{asset('js/es_file_Input.js')}}"></script>

<script>

@if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
  switch(type){
    case 'info':
      toastr.info("{{ Session::get('message') }}");
      break;

    case 'warning':
      toastr.warning("{{ Session::get('message') }}");
      break;
    case 'update':
      toastr["success"]("Su perfil ha sido actualizado exitosamente !", "{!! Auth::user()->name !!}",{positionClass: "toast-bottom-full-width"})
      break;
    case 'error':
      toastr.error("{{ Session::get('message') }}");
      break;
  }
  @endif
</script>

<!-- Dropddown | https://github.com/FezVrasta/dropdown.js -->
<script src="{{asset('dist/js/jquery.dropdown.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('dist/js/app.min.js')}}"></script>


<!--Script para subir imagen del profile -->
<script src="{{asset('dist/js/image-profile.js')}}"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>


<!-- Script de ejecucion del Toastr-->
@include('includes.notifications.toastr')


<script>
  $.material.init()
</script>

<script>
  // initialize with defaults
  $("#input-id").fileinput();

  // with plugin options
  $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});

</script>

</body>
</html>
