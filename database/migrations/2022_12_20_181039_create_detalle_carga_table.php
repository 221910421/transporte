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
            $table->unsignedBigInteger('paqueteId');
            $table->foreign('paqueteId')->references('id')->on('paquetes');

            $table->unsignedBigInteger('nombreId');
            $table->foreign('nombreId')->references('id')->on('sucursales');

            $table->unsignedBigInteger('vehiculoId');
            $table->foreign('vehiculoId')->references('id')->on('vehiculos');
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
