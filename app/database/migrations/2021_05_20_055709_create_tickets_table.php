<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->string('apellido_cliente');
            $table->string('direccion');
            $table->integer('telefono')->unique();
            $table->string('problema_expuesto');
            $table->string('solucion_brindada');

            $table->unsignedBigInteger('gestion_id');
            $table->unsignedBigInteger('gestionCli_id');

            $table->foreign('gestion_id')->references('id')->on('gestions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('gestionCli_id')->references('id')->on('gestion_clientes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tickets');
    }
}
