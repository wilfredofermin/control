<?php

namespace App\Http\Controllers;

use App\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
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
        //
    }

    public function store(Request $request)
    {
        //dd($request);
        $sucursal= new Sucursal();
        $sucursal->sucursal=mb_strtoupper($request->sucursal);
        $sucursal->direccion=$request->direccion;

        //Determinando el estatus
        if($request->estado=='on'){
            $sucursal->estado=1;
        }else{
            $sucursal->estado=0;
        }
        //Guardando los cambios
        $sucursal->save();

        $notification = array(
            'message' => 'Perfil actualizado exitosamente!',
            'alert-type' => 'create_sucursal'
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
