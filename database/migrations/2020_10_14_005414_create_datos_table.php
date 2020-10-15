<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->integer('propiedad_id')->unique();
            $table->string('entidad_federativa')->nullable();
            $table->string('municipio')->nullable();
            $table->string('localidad')->nullable();
            $table->string('folio_regpub')->nullable();
            $table->string('folio_catastral')->nullable();
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
        Schema::dropIfExists('datos');
    }
}
