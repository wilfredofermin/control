<div class="modal fade " id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document"><!-- /.modal-dialog -->

            <div class="card">
                <div class="header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2>
                        ACTUALIZAR DATOS <small>Editar datos de perfil</small>
                    </h2>

                </div>

                <div class="body">

                    <div class="row col-xs-offset-0">
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="name"  required class="form-control">
                                    <label class="form-label"><i class="fa fa-user" aria-hidden="true"></i> Nombre Completo</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="email"  required readonly class="form-control">
                                    <label class="form-label"><i class="fa fa-envelope-o" aria-hidden="true"></i> Correo Electronico</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input class="form-control" name="password"  id="password" type="password" >
                                    <label class="form-label"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input class="form-control" name="password_confirmation" id="password_confirm" type="password" >
                                    <label class="form-label"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Confirmar password</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <select class="selectpicker" name="puesto" data-width="100%">
                                    <option selected>SELECCIONE EL PUESTO</option>
                                    @foreach($puestos as $puesto)
                                        <option value="{{$puesto->name}}">{{$puesto->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <select class="selectpicker" name="sucursal" data-width="100%">
                                    <option selected>SELECCIONE LA SUCURSAL</option>
                                    <option value="naco">NACO</option>
                                    <option value="ah">ARROYO HONDO</option>
                                    <option value="bv">BELLA VISTA</option>
                                    <option value="sti">SANTIAGO</option>
                                </select>
                            </div>
                        </div>

                </div>
                <div class="form-group">
                    <div align="center">
                        <div class="col-md-12">
                            <hr />
                            <a class="btn btn-danger btn-lg  btn-raised " role="button" data-dismiss="modal" ><i class="fa fa-times" aria-hidden="true"></i> CANCELAR</a>
                            <button id="update" type="button" class="btn btn-default waves-effect"><i class="fa fa-floppy-o" aria-hidden="true"></i> GUARDAR</button>
                        </div>
                    </div>
                </div>
            </div>

    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
