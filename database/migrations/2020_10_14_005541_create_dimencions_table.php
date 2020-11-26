<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimencionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimencions', function (Blueprint $table) {
            $table->id();
            $table->string('superficie_construccion')->nullable();
            $table->string('superficie_terreno')->nullable();
            $table->double('frente', 8, 2)->nullable();
            $table->double('fondo', 8, 2)->nullable();
            $table->string('capacidad_granja')->nullable();
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
        Schema::dropIfExists('dimencions');
    }
}
