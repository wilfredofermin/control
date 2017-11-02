<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function notificacion()
    {
        //NOTIFICACION CON TOASTR | http://www.expertphp.in/article/laravel-5-3-notification-message-popup-using-toastr-js-plugin-with-demo
        $notification = array(
            'message' => 'Bienvendo'." ".Auth::user()->name,
            'alert-type' => 'bienvenido'
        );
         //session()->flash('notification',$notification);
        return redirect('/home')->with($notification);


    }


    public function index()
    {
        return view('home');
    }
}
