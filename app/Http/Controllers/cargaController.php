<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleCarga;
use App\Models\usuarios;

class cargaController extends Controller
{
    public function guardarDetalleCarga(Request $request){
        $detalleCarga = DetalleCarga::create([
            'transportistaId' => session('sessionId'),
            'peso' => $request->peso,
            'cantidad' => $request->cantidad,
            'salida' => $request->salida,
            'destino' => $request->destino,
            'tipo' => $request->tipo
        ]);

        echo '<script language="javascript"> alert("Carga creada correctamente");</script>';

    }

    // public function varCarga(){
    //     $detalleCarga = DetalleCarga::all();
    //     print_r($detalleCarga);
    // }

    public function index(){
        $detalleCarga = DetalleCarga::all();
        $Transportistas = usuarios::all();
        return view('carga')->with(['detalleCarga' => $detalleCarga])->with(['Transportistas' => $Transportistas]);
    }


}
