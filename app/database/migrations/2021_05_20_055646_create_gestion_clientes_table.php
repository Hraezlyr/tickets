<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_clientes', function (Blueprint $table) {
            $table->id();
            $table->boolean('atendido')->default(false);
            $table->date('fecha_creacion');

            $table->unsignedBigInteger('gestion_id');
            $table->foreign('gestion_id')->references('id')->on('gestions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('gestion_clientes');
    }
}
