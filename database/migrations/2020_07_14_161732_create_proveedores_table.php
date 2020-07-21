<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ruc');
            $table->string('razonsocial');
            $table->string('nombreresponsable')->default('sin responsable');
            $table->string('telefono')->nullable(true);
            $table->string('celular');
            $table->string('email')->nullable(true);
            $table->string('ciudad');
            $table->string('provincia');
            $table->string('direccion')->nullable(true);
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
        Schema::dropIfExists('proveedores');
    }
}
