<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('rfc');
            $table->biginteger('telefono');
            $table->biginteger('celular');
            $table->string('Ine_front');
            $table->string('Ine_back');
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
