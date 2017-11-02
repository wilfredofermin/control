<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {

    return view('auth.login');
});

Auth::routes();

//NOTIFICACION CON TOASTR
Route::get('notificacion',function(){
    $notification = array(
        'message' => 'Bienvendo'." ".Auth::user()->username,
        'alert-type' => 'success'
    );
    session()->flash('notification',$notification);
    return redirect('/home');

});

//NOTIFICACION UTILIZANDO PNOTIFY
Route::get('noficacionjs',function()
{
    // session()->flash para que solo permita un request por petision | el mensaje se mostrara una sola vez al inicial.
    session()->flash('success','');
    return redirect('/home');
});

//NOTIFICACION UTILIZANDO SWEETALERT
Route::get('salir',function()
{
    // session()->flash para que solo permita un request por petision | el mensaje se mostrara una sola vez al inicial.
    session()->flash('logout','');

    return redirect('/home');
});


Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');


Route::get('/create', function()
{
# Luego de utilizado debe deshabilitarse este ruta.
    App\User::create([
        'name' =>'admin',
        'username' =>'Bodyshop',
        'email' =>'bodyshop@clubbodyshop.com',
        'roll' => 'administrador',
        'password' => bcrypt('1234567'),
    ]);
});

