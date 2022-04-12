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
        Schema::create('etiqueta__productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_etiqueta');
            $table->unsignedBigInteger('id_producto');
            $table->timestamps();
            $table->foreign('id_etiqueta')->references('id')->on('etiquetas');
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
        Schema::dropIfExists('etiqueta__productos');
    }
};
