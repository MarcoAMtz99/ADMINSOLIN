<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosFiscalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_fiscales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cliente_id');
            $table->string('calle');
            $table->integer('num_ext');
            $table->integer('num_int');
            $table->string('colonia');
            $table->bigInteger('cp');
            $table->string('ciudad');
            $table->string('pais',;)
            $table->string('alc_mun');
            $table->string('rfc');
            $table->string('correo');
            $tbale->string('razon_social');
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
        Schema::dropIfExists('datos_fiscales');
    }
}
