@extends('layouts.app_material_design')

@section('titulo')
    PERFIL DE USUARIO
@stop

@section('content')
    @if (count($errors) > 0)
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div align="center">
                    <h1 class="panel-title"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error al <strong>Actualizar</strong></h1>
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

    <div align="center">
        <div class="card">
            <div class="header">
                <div class="box-header with-border">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-image">
                            <img src="{{asset('images/users/'.Auth::user()->avatar)}}" class="img-circle" width="120px" height="105px" alt="Cinque Terre" >
                        </div>
                    </div>
                    <div class="header">
                        <h2>
                            {{$usuarios->name}}
                        </h2>
                        @include('includes.asset.role')
                    </div>

                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="mailto:w.fermin@clubbodyshop.com" class=" waves-effect waves-block"><i class="fa fa-envelope" aria-hidden="true"></i> Soporte Tecnico</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">

                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">{{$usuarios->puesto}}</h5>
                            <span class="description-text"><i class="fa fa-briefcase" aria-hidden="true"></i> Puesto</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">{{$usuarios->email}}</h5>
                            <span class="description-text"><i class="fa fa-envelope" aria-hidden="true"></i> Email</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">{{$usuarios->sucursal}}</h5>
                            <span class="description-text"><i class="fa fa-building" aria-hidden="true"></i> Sucursal</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="card">
        <div class="header">
            <h2>
                ACTUALIZAR DATOS <small>Editar datos de perfil</small>
            </h2>

        </div>
        <div class="body">
            <div class="box-body">
                <!-- /.box-header -->
                {!!Form::model($usuarios,['id'=>'profile-form','method'=>'PATCH','files' => true,'route'=>['profile.update',Auth::user()->id]])!!}

                {{ csrf_field() }}
                <br>
                <div class="row col-xs-offset-0">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="name" value="{{$usuarios->name}}"  required class="form-control">
                                <label class="form-label"><i class="fa fa-user" aria-hidden="true"></i> Nombre Completo</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="email" value="{{$usuarios->email}}"  required readonly class="form-control">
                                <label class="form-label"><i class="fa fa-envelope-o" aria-hidden="true"></i> Correo Electronico</label>
                            </div>
                        </div>
                    </div>
                    {{--PASSWORD--}}
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                             <div class="form-line">
                                <input class="form-control" name="password"  id="password" type="password" >
                                <label class="form-label"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Password</label>
                            </div>
                        </div>
                    </div>
                    {{--PASSWORD--}}
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" name="password_confirmation" id="password_confirm" type="password" >
                                <label class="form-label"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Confirmar password</label>
                            </div>
                        </div>
                    </div>
                    {{--INFORMACION--}}
                    <div class="col-sm-12">
                        <div class="alert alert-info">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>Password</strong> <p>De no desear cambiar su <strong>password</strong>, dejar este campo en blanco.</p>
                        </div>
                        <br>
                    </div>
                    {{--PUESTO--}}
                    <div class="col-sm-6">
                        <select class="selectpicker" data-style="btn-primary" name="puesto" data-width="100%">
                            @foreach($puestos as $puesto)
                                <option value="{{$puesto->puesto}}">{{$puesto->puesto}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{--SUCURSAL--}}
                    <div class="col-sm-6">
                        <select class="selectpicker" data-style="btn-primary" name="sucursal" data-width="100%">
                            @foreach($sucursales as $suc)
                            <option value="{{$suc->sucursal}}">{{$suc->sucursal}}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group label-floating">
                            <span class="input-group-btn input-group-sm"></span>
                            <label class="control-label" for="focusedInput2"><i class="fa fa-picture-o" aria-hidden="true"></i> Avatar</label>
                            <input name="avatar" accept="image/*" id="input-profile" type="file" class="form-control" data-preview-file-type="text" >
                        </div>
                    </div>

                    <div class="form-group">
                        <div align="center">
                            <div class="col-md-12">
                                <a href="{{ url('/home') }}" class="btn btn-danger btn-lg  btn-raised " role="button"><i class="fa fa-times" aria-hidden="true"></i> CANCELAR</a>
                                <button id='update' type="submit" class="btn btn-default waves-effect"><i class="fa fa-refresh" aria-hidden="true"></i> ACTUALIZAR</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{--Incluyendo el mensaje--}}

                {!!Form::close()!!}
                        <!-- /.box-body -->
            </div>
        </div>
    </div>

@endsection








