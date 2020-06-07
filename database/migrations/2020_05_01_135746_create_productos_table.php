<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo')->unique();
            $table->unsignedBigInteger('idubicacion');
            $table->unsignedBigInteger('idcategoria');
            $table->unsignedBigInteger('idmarca');
            $table->string('nombre');
            $table->decimal('entradas')->default(0.0);
            $table->decimal('salidas')->default(0.0);
            $table->decimal('stock');
            $table->string('unidadmedida');
            $table->decimal('preciocompra');
            $table->decimal('precioventa');
            $table->decimal('precioventamayor');
            $table->boolean('servicio')->default(false);
            $table->boolean('estado')->default(true);
            $table->string('descripcion')->nullable(true)->default(null);
            $table->timestamps();
            //definicion de claves foraneas
            $table->foreign('idubicacion')->references('id')->on('ubicaciones');
            $table->foreign('idcategoria')->references('id')->on('categorias');
            $table->foreign('idmarca')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
