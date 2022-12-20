<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleCarga extends Model
{
    use HasFactory;

    protected $table = 'detalle_carga';
    protected $primaryKey = 'id';
    protected $fillable = [
        'peso', 
        'cantidad',
        'salida',
        'destino',
        'tipo'
    ];

   
}



