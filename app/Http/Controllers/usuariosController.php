<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class usuariosController extends Controller
{
    public function login(){
        $consulta = usuarios::where('usuario', '=', $request->usuario)->where('contraseña', '=', $request->contraseña)->where('estado', '=', 'activo')->first();
        if(count($consulta) > 0){
            return view('home')
                ->with(´consulta´, $consulta);
        }else{
            return view('login');
        }
    }
}
