<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\tareasPendientes;
use Validator;
use Redirect;
use Session;
use App\User;
use App\Tarea;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $tareasP = Tarea::lstareas('Pendiente');
        return view('home', ['tareasP'=>$tareasP]);
    }
    public function agregarTarea(){
        return view('agregarTarea');
    }
    public function registrarTarea(Request $request){
        $estado = 'Pendiente';
        $tarea = new Tarea;
        $tarea->descripcion = $request['descripcion'];
        $tarea->estado = $estado;
        $tarea->save();
        Session::flash('mensaje-confirmar','Tarea Agregada');
        return redirect()->intended('/home');
    }
    public function actualizarTarea(Request $request){
        $idT = $request['id'];
        $estado = 'Concluida';
        $tareaA = Tarea::find($idT);
        $tareaA->estado = $estado;
        $tareaA->save();
        return ("Actualizado");
    }
    public function enviarCorreo(){
        $tareasP = Tarea::lstareas('Pendiente');
        $usuarios = User::lscorreo();
        Mail::to($usuarios)->send(new tareasPendientes($tareasP));
        return redirect()->intended('/home');
    }
   
}
