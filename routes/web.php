<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//NOTIFICACION CON TOASTR | http://www.expertphp.in/article/laravel-5-3-notification-message-popup-using-toastr-js-plugin-with-demo
Route::get('/notificacion', 'HomeController@notificacion');

Route::get('/home', 'HomeController@index');

Route::resource('/profile','ProfileController');

Route::resource('/user','UserController');

Route::resource('/puesto','PuestoController');

Route::resource('/sucursal','SucursalController');

Route::group(['middleware'=>'admin','namespace'=>'Admin'],function(){





});





#UTILIZADO PARA CREAR EL USUARIO ADMINISTRADOR DEL SISTEMA | PRIMER USO DE LA APLICACION.
# Luego de utilizado debe deshabilitarse este ruta.

Route::get('/create', function()
{

    App\User::create([
        'name' =>'BODYSHOP',
        'email' =>'bodyshop@clubbodyshop.com',
        'role' => '1', // 1 - Admin | 2 - Support | 3 - Client
        'puesto'=>'WEB ',
        'sucursal'=>'NACO',
        'estado'=>'1', // Activo
        'password' => bcrypt('1234567'),

    ]);
    return redirect('/login');
});