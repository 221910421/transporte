<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use App\Models\usuarios;

class transportitasController extends Controller
{
    public function verTransportistas(){
        $transportistas = usuarios::where('rol', 'transportista')->get();
        return view('usuarios')
        ->with(['transportistas'=>$transportistas]);
    }

    public function actualizarTransportistas(Request $request){
        $transportista = usuarios::where('id', $request->id)->first();
        $transportista->estado = 'inactivo';
        $transportista->save();
        return view('verTransportistas');
    }


}
