<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidomaestroclisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidomaestroclis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idcliente')->default(1);
            $table->decimal('subtotal')->default(0);
            $table->decimal('descuento')->default(0);
            $table->decimal('total')->default(0);
            $table->boolean('estado')->default(true);
            $table->boolean('entregado')->default(false);
            $table->boolean('cobrado')->default(false);
            $table->boolean('credito')->default(false);
            $table->enum('tipopago',['efectivo','tarjeta'])->default('efectivo');
            $table->string('observacion')->nullable(true);
            $table->timestamps();
            $table->foreign('idcliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidomaestroclis');
    }
}
