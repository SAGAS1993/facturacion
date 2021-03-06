<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArticuloCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_articulo');
            $table->unsignedBigInteger('id_compra');

            $table->tinyInteger('entregado');
            $table->integer('cantidad');
            $table->text('descripcion');

            $table->timestamps();

            $table->foreign('id_articulo')->references('id')->on('articulos');
            $table->foreign('id_compra')->references('id')->on('compra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo_compra');
    }
}
