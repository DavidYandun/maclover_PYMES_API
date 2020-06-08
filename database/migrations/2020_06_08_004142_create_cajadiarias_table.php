<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajadiariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajadiarias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('precioinicial');
            $table->dateTime('fecha', 0);
            $table->string('turno');
            $table->decimal('preciofinal');
            $table->string('responsable');
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
        Schema::dropIfExists('cajadiarias');
    }
}
