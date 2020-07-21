<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturamaestroprovsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturamaestroprovs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proveedores_id')->default(1);
            $table->string('numerofactura');
            $table->date('fecha');
            $table->decimal('subtotal')->default(0);
            $table->decimal('descuento')->default(0);
            $table->decimal('iva')->default(0);
            $table->decimal('ice')->default(0);
            $table->decimal('total')->default(0);
            $table->boolean('estado')->default(true);
            $table->boolean('credito')->default(false);
            $table->timestamps();
            $table->foreign('proveedores_id')->references('id')->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturamaestroprovs');
    }
}
