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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->string('no_ingreso');
            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('id_producto');
            $table->string('factura');
            $table->integer('cantidad');
            $table->double('costo');
            $table->double('total');
            // $table->dateTime('fecha_ingreso');

            $table->timestamps();

            $table->foreign('id_proveedor')->references('id')->on('proveedores');
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
        Schema::dropIfExists('ingresos');
    }
};
