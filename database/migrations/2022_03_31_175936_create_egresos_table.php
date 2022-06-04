<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->id();
            $table->string('no_egreos');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_producto');
            $table->string('factura');
            $table->integer('cantidad');
            $table->double('costo');
            $table->double('total');
            // $table->dateTime('fecha_egreso');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egresos');
    }
};
