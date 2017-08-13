<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos_nuevos', function (Blueprint $table) {
            $table->increments('id_auto');
            $table->date('fecha_llegada');
            $table->string('chasis');
            $table->string('tipo_auto');
            $table->string('ultimo_servicio')->nullable();
            $table->date('fecha_ultimo_servicio')->nullable();
            $table->string('servicio_pendiente')->nullable();
            $table->string('proximo_servicio')->nullable();
            $table->date('fecha_proximo_servicio')->nullable();
            $table->string('tecnico')->nullable();
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
        Schema::drop('autos_nuevos');
    }
}
