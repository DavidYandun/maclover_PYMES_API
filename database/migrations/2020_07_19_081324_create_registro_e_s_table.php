<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_e_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cajadiaria_id');
            $table->unsignedBigInteger('facturamaestroclis_id')->nullable(true);
            $table->unsignedBigInteger('facturamaestroprovs_id')->nullable(true);
            $table->string('descripcion');
            $table->boolean('entradasalida')->default(true);
            $table->decimal('precio')->default(0);
            $table->date('fecha');
            $table->timestamps();
            $table->foreign('cajadiaria_id')->references('id')->on('cajadiarias');
            $table->foreign('facturamaestroclis_id')->references('id')->on('facturamaestroclis');
            $table->foreign('facturamaestroprovs_id')->references('id')->on('facturamaestroprovs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_e_s');
    }
}
