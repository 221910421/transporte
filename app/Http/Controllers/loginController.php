<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class loginController extends Controller
{
    public function login(Request $request){
    $consulta = usuarios::where('usuario', $request->usuario)->where('contraseña', $request->contraseña)->where('estado', 'activo')->first();
    if($consulta != null){
        if($consulta->rol == 'transportista'){
            $request->session()->put('sessionId', $consulta->id);
            return view('crearDetalle');
        }else{
            return route('carga');
        }
    }else{
        return view('home');
    }
    }
}
