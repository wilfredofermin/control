<?php

namespace App\Http\Controllers;

use App\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        //
    }


    public function create()
    {

    }


    public function store(Request $request)

    {
        //dd($request);
        //$puestos= new Puesto($request->all());
        $puestos= new Puesto();
        $puestos->puesto=mb_strtoupper($request->puesto);
        $puestos->descripcion=$request->descripcion;

        //Determinando el estatus
        if($request->estado=='on'){
            $puestos->estado=1;
        }else{
            $puestos->estado=0;
        }

        $puestos->save();

        $notification = array(
            'message' => 'Perfil actualizado exitosamente!',
            'alert-type' => 'create_puesto'
        );
        return back()->with($notification);

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
