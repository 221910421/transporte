<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class loginController extends Controller
{
    public function login(Request $request){
    $consulta = usuarios::where('usuario', $request->usuario)->where('contrasena', $request->contrasena)->where('estado', 'activo')->first();
    if(count($consulta) > 0){
        if(usuario->rol == 'transportista'){
            $request->session()->put('sessionId', $consulta->id);
            return view('crearCarga');
        }else{
            return route('carga');
        }
    }else{
        return view('login');
    }
    }
}
