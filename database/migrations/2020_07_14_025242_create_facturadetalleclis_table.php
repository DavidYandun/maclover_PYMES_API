<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturadetalleclisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturadetalleclis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('facturamaestroclis_id');
            $table->unsignedBigInteger('productos_id');
            $table->decimal('cantidad');
            $table->string('descripcion');
            $table->decimal('preciounitario')->default(0);
            $table->decimal('descuento')->default(0);
            $table->decimal('preciototal')->default(0);
            $table->string('serie');       
            $table->timestamps();
            $table->foreign('facturamaestroclis_id')->references('id')->on('facturamaestroclis');
            $table->foreign('productos_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturadetalleclis');
    }
}
