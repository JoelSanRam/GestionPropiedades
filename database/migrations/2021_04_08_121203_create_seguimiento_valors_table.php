<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientoValorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_valors', function (Blueprint $table) {
            $table->id();
            $table->integer('propiedad_id');
            $table->double('avaluo_terreno', 12, 2)->nullable(); // Avalúo de terreno
            $table->double('estimacion_valor_construccion', 12, 2)->nullable(); // Estimación de valor de la construcción
            $table->double('avaluo_construccion', 12, 2)->nullable(); // Avalúo de la construcción
            $table->double('valor_conjunto', 12, 2)->nullable(); // Valor conjunto
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
        Schema::dropIfExists('seguimiento_valors');
    }
}
