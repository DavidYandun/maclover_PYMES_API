<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosmaestroclisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidosmaestroclis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idcliente');
            $table->bigInteger('numeropedido')->autoIncrement();
            $table->decimal('subtotal');
            $table->decimal('subtotal');
            $table->decimal('descuento')->default(0);
            $table->decimal('total');
            $table->boolean('credito');
            $table->boolean('estado');
            $table->string('observacion');
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
        Schema::dropIfExists('pedidosmaestroclis');
    }
}
