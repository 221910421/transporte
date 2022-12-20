<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleCarga;

class cargaController extends Controller
{
    public function guardarDetalleCarga(Request $request){
        $detalleCarga = DetalleCarga::create([
            'peso' => $request->peso,
            'cantidad' => $request->cantidad,
            'salida' => $request->salida,
            'destino' => $request->destino,
            'tipo' => $request->tipo
        ]);

        return view('vercarga');

    }

    public function varCarga(){
        $detalleCarga = DetalleCarga::all();
        print_r($detalleCarga);
    }
}
