<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idProducto');
            $table->string('sku');
            $table->text('nombre');
            $table->float('precio');
            $table->longText('slug');
            $table->bigInteger('marca');
            $table->longText('descripcion');
            $table->longText('detalles');
            $table->integer('status');
            $table->bigInteger('departamentoId');
            $table->bigInteger('categoriaId');
            $table->bigInteger('subCategoriaId');
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
        Schema::dropIfExists('productos');
    }
}