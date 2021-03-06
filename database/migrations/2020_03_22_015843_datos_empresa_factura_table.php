<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosEmpresaFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_empresa_factura', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nombre');
            $table->text('nit');
            $table->text('regimen');
            $table->text('reso_dian');
            $table->text('representacion_legal');
            $table->text('direccion');
            $table->text('telefono');
            $table->text('ciudad');
            $table->text('ofrece');
            $table->text('nombre_empresa_2');
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
        Schema::dropIfExists('datos_empresa_factura');
    }
}
