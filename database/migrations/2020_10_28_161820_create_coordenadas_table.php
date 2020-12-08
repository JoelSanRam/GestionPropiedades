<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordenadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordenadas', function (Blueprint $table) {
            $table->id();
            $table->integer('propiedad_id');
            $table->double('lat', 20, 15)->nullable();
            $table->double('lng', 20, 15)->nullable();
            $table->string('marcador')->nullable();
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
        Schema::dropIfExists('coordenadas');
    }
}
