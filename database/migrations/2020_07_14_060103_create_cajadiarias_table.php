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
            $table->decimal('precioinicial')->default(0);
            $table->date('fechayhora');
            $table->enum('turno',['primero','segundo','tercero'])->default('primero');
            $table->decimal('preciofinal')->default(0);
            $table->string('responsable');
            $table->boolean('estado')->default(true);
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
