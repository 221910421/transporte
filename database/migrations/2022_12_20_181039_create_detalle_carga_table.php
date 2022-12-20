<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_carga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transportistaId')->comment('Id del transportista');
            $table->foreign('transportistaId')->references('id')->on('usuarios');
            $table->string('peso')->comment('Peso del paquete');
            $table->string('cantidad')->comment('Cantidad de paquete');
            $table->string('salida')->comment('Lugar de salida');
            $table->string('destino')->comment('Lugar de destino');
            $table->enum('tipo',['Trailer','Torton','Camioneta'])->comment('Tipo de vehiculo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_carga');
    }
};
