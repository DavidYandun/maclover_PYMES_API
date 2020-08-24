<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturamaestroclisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturamaestroclis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('clientes_id')->default(1);
            $table->date('fecha')->nullable(true);
            $table->date('fechaentrega')->nullable(true);
            $table->string('numerofactura')->nullable(true)->unique();
            $table->decimal('subtotal')->default(0);
            $table->decimal('descuento')->default(0);
            $table->decimal('iva')->default(0);
            $table->decimal('ice')->default(0);
            $table->decimal('total')->default(0);
            $table->boolean('estado')->default(true);
            $table->boolean('entregado')->default(true);
            $table->boolean('cobrado')->default(true);
            $table->boolean('credito')->default(false);
            $table->boolean('facturado')->default(false);
            $table->enum('tipopago',['efectivo','tarjeta'])->default('efectivo');
            $table->string('observacion')->nullable(true);
            $table->timestamps();
            $table->foreign('clientes_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturamaestroclis');
    }
}
