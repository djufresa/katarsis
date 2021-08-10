<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('estado');
            $table->string('fechai');
            $table->string('fechaf');
            $table->time('horai');
            $table->time('horaf');
            $table->unsignedBigInteger('presio_id');
            $table->foreign('presio_id')->references('id')->on('presios');
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->unsignedBigInteger('mod_id');
            $table->foreign('mod_id')->references('id')->on('modalities');
            
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
        Schema::dropIfExists('eventos');
    }
}
