<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacions', function (Blueprint $table) {
            $table->id();
            $table->string('ejido')->nullable();
            $table->integer('parcela')->nullable();
            $table->integer('lote')->nullable(); // cambiamos de lugar
            $table->integer('solar')->nullable();
            $table->integer('tablaje')->nullable();
            $table->string('finca')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('ejido_manzana')->nullable(); 
            $table->integer('codigo_postal')->nullable();
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
        Schema::dropIfExists('ubicacions');
    }
}
