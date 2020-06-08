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
            $table->string('codigoaux')->unique()->nullable(true)->default(null);
            $table->unsignedBigInteger('idcategoria');
            $table->unsignedBigInteger('idubicacion');
            $table->unsignedBigInteger('idmarca');
            $table->unsignedBigInteger('idunidadmedida');
            $table->string('nombre');
            $table->decimal('stock');
            $table->decimal('preciocompra');
            $table->decimal('precioventa');
            $table->decimal('precioventamayor')->nullable(true)->default(null);
            $table->boolean('servicio')->default(false);
            $table->boolean('iva')->default(true);
            $table->string('url')->nullable(true)->default(null);
            $table->boolean('estado')->default(true);
            $table->string('descripcion')->nullable(true)->default(null);
            $table->timestamps();
            //definicion de claves foraneas
            $table->foreign('idcategoria')->references('id')->on('categorias');
            $table->foreign('idubicacion')->references('id')->on('ubicaciones');
            $table->foreign('idmarca')->references('id')->on('marcas');
            $table->foreign('idunidadmedida')->references('id')->on('unidadmedidas');
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
