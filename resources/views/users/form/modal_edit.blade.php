<div class="modal fade " id="myModaledit" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document"><!-- /.modal-dialog -->

        <div class="card">
            <div class="header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2>
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> EDITAR <small>Usuario <i class="fa fa-user" aria-hidden="true"></i> </small>
                </h2>
            </div>
            <div class="body">
                <div class="row col-xs-offset-0">
                    <div class="col-lg-12">
                        <div class="well">
                            {!! Form::open(['method'=>'POST','action'=>'UserController@store','class'=>'form-horizontal','files' => 'true']) !!}
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1">
                                    <div class="body">
                                        <div class="row col-xs-offset-0">
                                            {{--ESTATUS--}}
                                            <div class="col-sm-12">
                                                <div align="right">
                                                    <div class="switch panel-switch-btn">
                                                        <span class="m-r-10 font-12"></span>
                                                        <label>DESACTIVO<input type="checkbox" name="estado_usuario" id="estado"  checked=""><span class="lever switch-col-cyan"></span>ACTIVO</label>
                                                        <hr />
                                                    </div>
                                                </div>
                                            </div>
                                            {{--ROL--}}
                                        <!-- <div class="col-md-12">
                                                    <div class="form-line">
                                                        <label class="form-label"><i class="fa fa-shield" aria-hidden="true"></i> Rol</label>
                                                        <input type="number" value="{{ old('role') }}"  id="role" name="role" >
                                                    </div>
                                                </div>-->

                                            {{--NOMBRE COMPLETO--}}
                                            <div class="col-sm-6">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="name" id="name" required class="form-control" value="{{ old('name') }}">
                                                        <label class="form-label"><i class="fa fa-user" aria-hidden="true"></i> Nombre Completo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--CORREO ELECTRONICO--}}
                                            <div class="col-sm-6">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="email" name="email" id="email" required class="form-control" value="{{ old('email') }}" >
                                                        <label class="form-label"><i class="fa fa-envelope-o" aria-hidden="true"></i> Correo Electronico</label>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--PASSWORD--}}
                                            <div class="col-sm-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input class="form-control" id="password" name="password" value="{{ old('password') }}" required id="password" type="password" >
                                                        <label class="form-label"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--PASSWORD CONFIRMAR--}}
                                            <div class="col-sm-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required id="password_confirm" type="password" >
                                                        <label class="form-label"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Confirmar</label>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--CODIGO EMPLEADO--}}
                                            <div class="col-sm-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="number" name="cod_empleado" id="cod_empleado" required value="{{ old('cod_empleado') }}"  class="form-control">
                                                        <label class="form-label"><i class="fa fa-hand-o-up" aria-hidden="true"></i> Codigo Empleado</label>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--ROLES DE ACCESO--}}
                                            <div class="col-sm-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <select class="selectpicker" title="Rol del usuario" data-style="btn-primary" id="role" name="role" value="{{ old('role') }}" data-width="100%">
                                                            <option value="3">USUARIO</option>
                                                            <option value="2">EVALUADOR</option>
                                                            <option value="1">SUPERVISOR</option>
                                                            <option value="0">ADMINISTRADOR</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--ROLE OLD VALUE SCRIPT--}}
                                            <script>
                                                var c_role = null;
                                                for(var i=0; i!=document.querySelector("#role").querySelectorAll("option").length; i++)
                                                {
                                                    c_role = document.querySelector("#role").querySelectorAll("option")[i];
                                                    if(c_role.getAttribute("value") == "{{ old("role") }}")
                                                    {
                                                        c_role.setAttribute("selected","selected");
                                                    }
                                                }
                                            </script>
                                            {{--PUESTOS--}}
                                            <div class="col-sm-4">
                                                <div class="form-group form-float">
                                                    <select class="selectpicker" data-style="btn-primary" title="Indique el puesto" id="puesto_asig" name="puesto_asig" value="{{ old('puesto_asig') }}" data-width="100%">
                                                        @foreach($puestos as $puesto)
                                                            <option value="{{$puesto->puesto}}">{{$puesto->puesto}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--PUESTOS OLD VALUE SCRIPT--}}
                                            <script>
                                                var c_puesto = null;
                                                for(var i=0; i!=document.querySelector("#puesto_asig").querySelectorAll("option").length; i++)
                                                {
                                                    c_puesto = document.querySelector("#puesto_asig").querySelectorAll("option")[i];
                                                    if(c_puesto.getAttribute("value") == "{{ old("puesto_asig") }}")
                                                    {
                                                        c_puesto.setAttribute("selected","selected");
                                                    }
                                                }
                                            </script>
                                            {{--SUCURSALES--}}
                                            <div class="col-sm-4">
                                                <div class="form-group form-float">
                                                    <select class="selectpicker" data-style="btn-primary" title="indique la sucursal" id="sucursal_asig" name="sucursal_asig" required data-width="100%">
                                                        @foreach($sucursales as $suc)
                                                            <option value="{{$suc->sucursal}}">{{$suc->sucursal}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--SUCURSALES OLD VALUE SCRIPT--}}
                                            <script>
                                                var c_sucursal = null;
                                                for(var i=0; i!=document.querySelector("#sucursal_asig").querySelectorAll("option").length; i++)
                                                {
                                                    c_sucursal = document.querySelector("#sucursal_asig").querySelectorAll("option")[i];
                                                    if(c_sucursal.getAttribute("value") == "{{ old("sucursal_asig") }}")
                                                    {
                                                        c_sucursal.setAttribute("selected","selected");
                                                    }
                                                }
                                            </script>
                                            {{--SUBIR IMAGEN--}}
                                            <div class="col-sm-12">
                                                <div class="form-group label-floating">
                                                    <span class="input-group-btn input-group-sm"></span>
                                                    <label class="control-label" for="focusedInput2"><i class="fa fa-upload " aria-hidden="true"></i> Subir imagen</label>
                                                    <input name="avatar" value="{{ old('avatar') }}"  accept="image/*" id="input-edit" type="file" class="form-control" data-preview-file-type="text" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{--BOTONES DE ACCION--}}
                                        <div align="center">
                                            <div class="col-md-12">
                                                <hr />
                                                <a class="btn btn-danger btn-lg  btn-raised " role="button" data-dismiss="modal" ><i class="fa fa-times" aria-hidden="true"></i> CANCELAR</a>
                                                <button type="submit" class="btn btn-default waves-effect"><i class="fa fa-floppy-o" aria-hidden="true"></i> GUARDAR</button>
                                            </div>
                                        </div>
                                    </div>
                                    {!!Form::close()!!}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

