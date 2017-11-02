<?php

namespace App\Http\Controllers;

use App\Providers\AuthServiceProvider;
use App\Puesto;
use App\Sucursal;
use Grimthorr\LaravelToast\Toast;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\Exception;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    public function __construct()
    {
        //Tiene que ser administrador
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        //dd($request);
        if ($request)

        {
            //////////////////////////////////////////////////////////////
            //QUERY'S BUSQUEDA ....
            //////////////////////////////////////////////////////////////

            $searchText=trim($request->get('searchText'));

            //////////////////////////////////////////////////////////////
            //QUERY'S PUESTOS
            //////////////////////////////////////////////////////////////

            $puestos=Puesto::where('estado',1)->get();

            //Contar Puestos
            $c_puestos = Puesto::where('estado',1)
                ->count();

            //////////////////////////////////////////////////////////////
            //QUERY'S SUCURSALES
            //////////////////////////////////////////////////////////////

            //Solo los Acivos
            $sucursales=Sucursal::where('estado',1)->get();

            //Contar Activos
            $c_sucursales=Sucursal::where('estado',1)
                         ->count();

            //////////////////////////////////////////////////////////////
            //QUERY'S USUARIOS
            //////////////////////////////////////////////////////////////

            //Solo los Acivos
            $c_usr=User::where('estado',1)
                        ->count();

            //Usuario Activo , buscar por nombre en donde el email sea diferente al usuario validado.
            $persona = User::where('name','LIKE','%'.$searchText.'%')
                //->where('email','LIKE','%'.$query.'%')
                ->where('email','<>',Auth::user()->email)
                ->where('estado',1)
                ->orderBy('id','desc')
                ->Paginate(12);

            //////////////////////////////////////////////////////////////
            //Pasando variable a la vista
            return view('users.form.index',compact('persona','searchText','puestos','sucursales','c_usr','c_sucursales','c_puestos'));

        }
        //dd($request);
    }  
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //VALIDACION DE DATOS INTRODUCIDOS
        $this->validate($request, [
            'name' => 'required|min:5|max:255',
            'email' => 'required |email|unique:users',
            'avatar' => 'image',
            'cod_empleado' => 'required|min:3|max:8|unique:users',
            'password' => 'min:5',
            'password_confirmation' => 'same:password'
        ]);
        try {
      // dd($request);
        $user=new User();
        $usuario=mb_strtoupper($request->name);
        $user->name =mb_strtoupper($request->name);
        $role=($request->role);
        if ($role=='USUARIO') {
            $user->role = 3;
        }elseif($role=='EVALUADOR'){
            $user->role = 2;
        }elseif ($role=='SUPERVISOR'){
            $user->role = 1;
        }else{
            $user->role = 0; // ADMNISTRADOR DEL SISTEMA
        }
        if($request->estado_usuario=='on'){
            $user->estado=1;
        }else{
            $user->estado=0;
        }

        $user->email =mb_strtolower($request->email);
        $user->puesto =mb_strtoupper($request->puesto_asig);
        $user->sucursal =mb_strtoupper($request->sucursal_asig);
        $user->cod_empleado =$request->cod_empleado;
        //Para evitar que el data en el input se guarde con informacion no deseada, valido que no se hizo ningun cambio.
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        // Primero valido que el input avatar tenga informacion para poder procesar los cambios.
        // Si exite alguna imagen.....
        if ($request->avatar != null) {
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $file_name = $request->cod_empleado . '.' . $extension;
            //Aqui redimensiono la imagen
            Image::make($request->file('avatar'))
                ->resize(256,200)
                ->save('images/users/' . $file_name);

            $user->avatar = $file_name;

            $user->save();
            //Aqui envio la notificacion del cambio realizado.
            $notification = array(
                'message' => 'Perfil actualizado exitosamente!',
                'alert-type' => 'create_user' // Con esto envio una notificacion tipo Toast con la condicion tipo Create_user
            );
            return back()->with($notification);
        } else {
            //De lo contrario realiza los siguien | Esto permite guardar sin tener que cambiar la imagen actual.
            $user->save();

            $notification = array(
                'message' => 'Perfil actualizado exitosamente!',
                'alert-type' => 'create_user'
            );
            return back()->with($notification);
        }

        } catch (Exception $e) {
            return "Faltal error -" . $e . -getMessage();
        }

    }


    public function show()
    {



    }


    public function edit($id)
    {
        // Busco los datas necesario y se los envio a la vista Show
        $usr=User::find($id);
        $puesto=Puesto::all();

        return view('users.form.edit',['usuarios'=>$usr,'puestos'=>$puesto]);
    }

    public function update(Request $request, $id)

    {
        $this->validate($request, [
            'name' => 'required|min:5|max:255',
            'email'=>'required |email',
            'avatar'=>'image',
            'sucursal'=>'required',
            'role'=>'required',
            'puesto'=>'required',
            'password'=>'min:4',
            'password_confirmation'=>'same:password'
        ]);

        $user=User::findorFail($id);
        $user->name      =$request->name;
        $user->email     =$request->email;
        $user->role     =$request->role;
        $user->puesto    =$request->puesto;
        $user->sucursal  =$request->sucursal;
        //Para evitar que el data en el input se guarde con informacion no deseada, valido que no se hizo ningun cambio.
        if ($request->password !=null){
            $user->password  =bcrypt($request->password);
        }
        // Primero valido que el input avatar tenga informacion para poder procesar los cambios.
        // Si exite alguna imagen.....
        if ($request->avatar !=null){
            $extension=$request->file('avatar')->getClientOriginalExtension();
            $file_name=$user->id.'.'.$extension;
            //Aqui redimensiono la imagen
            Image::make($request->file('avatar'))
                ->resize(128,128)
                ->save('images/users/'.$file_name);

            $user->avatar=$file_name;

            $user->save();
            //Aqui envio la notificacion del cambio realizado.
            $notification = array(
                'message' => 'Perfil actualizado exitosamente!',
                'alert-type' => 'update'
            );
            return back()->with($notification);
        }
        else{
            //De lo contrario realiza los siguien | Esto permite guardar sin tener que cambiar la imagen actual.
            $user->save();

            $notification = array(
                'message' => 'Perfil actualizado exitosamente!',
                'alert-type' => 'update'
            );
            return back()->with($notification);
        }

    }

    public function destroy($id)
    {
        //
    }

}
