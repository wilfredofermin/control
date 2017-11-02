@extends('layouts.app_material_design')
{{--En esta seccion incluyo el buscador --}}
@section('call_search')
 @include('users.form.call_search')   
@stop
{{--En esta seccion incluyo el icono de busqueda --}}
@section('search')
 @include('users.form.search')   
@stop

@section('titulo')
    LISTA DE USUARIOS
@stop


@section('content')

            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon bg-teal">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <div class="text">USUARIOS</div>
                            <div class="number">{{$c_usr}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon bg-green">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <div class="text">PUESTOS</div>
                            <div class="number">{{$c_puestos}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon bg-light-green">
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <div class="text">SUCURSALES</div>
                            <div class="number">{{$c_sucursales}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon bg-lime">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <div class="text">ROLES DE ACCESO</div>
                            <div class="number">4</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTA DE USUARIOS
                                <small>Para realizar alguna busqueda,ir al icono <i class="fa fa-search" aria-hidden="true"></i> </small>
                            </h2>
                            <!--
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>

                                </li>
                            </ul>
                            -->
                        </div>
                        {{--TABLA DE USUARIOS --}}
                    <div class="body table-responsive">
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                            <!- Encabezado de la tabla-->
                                <tr>
                                    <th  class="text-center" ><i class="fa fa-check-square-o" aria-hidden="true"></i> ESTADO</th>
                                    <th  class="text-center" ><i class="fa fa-user" aria-hidden="true"></i> NOMBRE COMPLETO</th>
                                    <th  class="text-center" ><i class="fa fa-envelope" aria-hidden="true"></i> CORREO</th>
                                    <th  class="text-center" ><i class="icon_id_alt"></i> PUESTO</th>
                                    <th  class="text-center" ><i class="fa fa-lock" aria-hidden="true"></i> ROL</th>
                                   <!-- <th  class="text-center" ><i class="fa fa-cogs" aria-hidden="true"></i> Accion</th>-->
                                </tr>
                                <!- fin-->

                            <!- Inicio de bucle-->
                                @foreach($persona as $lista)
                                </thead>
                            <tbody>

                            <td  class="text-center ourItem">
                                 <!- Aqui mediante una grafico indico si esta activo o no-->
                            @if(($lista->estado)==1)
                            <input type="checkbox" id="basic_checkbox_4" class="filled-in" checked >
                            <label for="md_checkbox_30"></label>
                            @else
                                   <input type="checkbox" id="basic_checkbox_4" class="filled-in" checked disabled="">
                            <label for="md_checkbox_30"></label>
                            @endif
                                </td>

                                <td class="text-center ourItem"  >{{$lista->name }}</td>
                                <td class="text-center ourItem"  >{{$lista->email }}</td>
                                <td class="text-center ourItem"  >{{$lista->puesto }}</td>
                                <td class="text-center ourItem" >
                                    <!-- Roles -->
                                    @if ($lista->role==1)
                                        <span class="label label-success">ADMINISTRADOR </span>
                                    @elseif($lista->role==2)
                                        <span class="label label-info">SUPERVISOR </span>
                                    @elseif($lista->role==3)
                                        <span class="label label-primary">EVALUADOR </span>
                                    @else
                                        <span class="label label-warning">USUARIO </span>
                                    @endif
                                </td>
                                            {{--Botones de Accion--}}
                                <!--<td align="center">
                                 <button type="button" class="btn bg-blue btn-xs"><i class="material-icons">mode_edit</i></button>
                                </button>
                             @if ((Auth::user()->role)==1)
                                <button type="button" class="btn bg-red btn-xs"><i class="material-icons">delete_forever</i></button>
                                 @endif
                             </td>-->

                            </tbody>
                              @endforeach
                        </table>
                    </div>
                </div>
         </div>
            {{--Incluyo el boton flotante en la parte de abajo--}}
            @if(Auth::user()->is_admin)
            @include('users.floating.floating')
            @endif
            {{--Incluyo el modal add--}}
            @include('users.form.modal_add')
            @include('users.form.modal_edit')

           
@endsection