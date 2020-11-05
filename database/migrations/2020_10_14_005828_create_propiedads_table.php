<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->id();
            $table->integer('propiedad_id')->unique();
            $table->integer('origen_id')->nullable();
            $table->string('tipo')->nullable();
            $table->string('granja')->nullable();
            $table->string('estatus')->nullable();
            $table->string('nombre_corto')->nullable();
            $table->string('ultimo_movimiento')->nullable();
            $table->string('fecha_alta')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('propietario')->nullable();
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
        Schema::dropIfExists('propiedads');
    }
}
