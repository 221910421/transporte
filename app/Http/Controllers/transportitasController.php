<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transportitasController extends Controller
{
    public function verTransportistas(){
        $transportistas = usuarios::where('rol', 'transportista')->get();
        return view('verTransportistas')
        ->with('transportistas', $transportistas);
    }

    public function editarTransportistas(Request $request){
        $transportista = usuarios::where('id', $request->id)->first();
        return view('editarTransportistas')
        ->with('transportista', $transportista);
    }

    public function actualizarTransportistas(Request $request){
        $transportista = usuarios::where('id', $request->id)->first();
        $transportista->estado = $request->estado;
        $transportista->save();
        return view('verTransportistas');
    }


}
