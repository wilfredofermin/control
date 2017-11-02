<?php

namespace App\Http\Controllers;

use App\Puesto;
use App\Sucursal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $persona = User::where('name', 'LIKE', '%' . $query . '%')
                ->orwhere('email', 'LIKE', '%' . $query . '%')
                ->orderBy('id', 'desc')
                ->Paginate(12);
            return view('users.form.index', ['persona' => $persona, "searchText" => $query]);

        }
        //dd($request);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        try {
            $user = new User();
            $user->name =mb_strtoupper($request->name);
            $user->email =mb_strtoupper($request->email);
            $user->puesto =mb_strtoupper($request->puesto);
            $user->role =mb_strtoupper($request->role);
            $user->sucursal =mb_strtoupper($request->sucursal);
            $user->password =$request->bcrypt($request->password);
            $user->save();

            Return redirect()->route('user.index');

        } catch (Exception $e) {
            return "Faltal error -" . $e . -getMessage();
        }
    }


    public function show()
    {
        //Aqui muestro a todos los usuarios


    }


    public function edit()
    {

        // Busco los datas necesario y se los envio a la vista Show
        $usr = Auth::user();
        $puesto = Puesto::where('estado',1)->get();
        $sucursal=Sucursal::where('estado',1)->get();
        return view('users.form.profile', ['usuarios' => $usr, 'puestos' => $puesto,'sucursales'=>$sucursal]);
    }

    public function update(Request $request, $id)

    {
        $this->validate($request, [
            'name' => 'required|min:5|max:255',
            'email' => 'required |email',
            'avatar' => 'image',
            'sucursal' => 'required',
            'role' => 'role',
            'puesto' => 'required',
            'password' => 'min:4',
            'password_confirmation' => 'same:password'
        ]);

        $user = User::findorFail($id);
        $user->name =mb_strtoupper($request->name);
        $user->email =mb_strtolower($request->email);
        $user->puesto =mb_strtoupper($request->puesto);
        $user->sucursal =mb_strtoupper($request->sucursal);
        //Para evitar que el data en el input se guarde con informacion no deseada, valido que no se hizo ningun cambio.
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        // Primero valido que el input avatar tenga informacion para poder procesar los cambios.
        // Si exite alguna imagen.....
        if ($request->avatar != null) {
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $file_name = $user->id . '.' . $extension;
            //Aqui redimensiono la imagen
            Image::make($request->file('avatar'))
                ->resize(256,200)
                ->save('images/users/' . $file_name);

            $user->avatar = $file_name;

            $user->save();
            //Aqui envio la notificacion del cambio realizado.
            $notification = array(
                'message' => 'Perfil actualizado exitosamente!',
                'alert-type' => 'update'
            );
            return back()->with($notification);
        } else {
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
