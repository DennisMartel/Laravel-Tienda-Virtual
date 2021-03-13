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
        Schema::create('marcas', function (Blueprint $table) {
            $table->id('idMarca');
            $table->text('titulo');
            $table->longText('imagen');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->id('idProducto');
            $table->string('sku')->nullable();
            $table->text('nombre')->nullable();
            $table->float('precio')->nullable();
            $table->longText('slug')->nullable();
            $table->unsignedBigInteger('marca')->nullable();
            $table->longText('descripcion')->nullable();
            $table->longText('detalles')->nullable();
            $table->integer('status')->nullable();
            $table->unsignedBigInteger('departamentoId')->nullable();
            $table->unsignedBigInteger('categoriaId')->nullable();
            $table->unsignedBigInteger('subCategoriaId')->nullable();
            $table->timestamps();
            $table->foreign('departamentoId')->references('idDepartamento')->on('departamentos')->onDelete('cascade');
            $table->foreign('categoriaId')->references('idCategoria')->on('categorias')->onDelete('cascade');
            $table->foreign('subCategoriaId')->references('idSubCategoria')->on('sub_categorias')->onDelete('cascade');
            $table->foreign('marca')->references('idMarca')->on('marcas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
        Schema::dropIfExists('productos');
    }
}
