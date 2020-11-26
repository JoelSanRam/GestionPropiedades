<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valors', function (Blueprint $table) {
            $table->id();
            $table->double('valor_construccion', 12, 2)->nullable();
            $table->double('valor_terreno', 12, 2)->nullable();
            $table->double('valor_comercial', 12, 2)->nullable();
            $table->string('fecha_valor_comercial')->nullable();
            $table->double('valor_catastral', 12, 2)->nullable();
            $table->string('fecha_valor_catastral')->nullable();
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
        Schema::dropIfExists('valors');
    }
}
