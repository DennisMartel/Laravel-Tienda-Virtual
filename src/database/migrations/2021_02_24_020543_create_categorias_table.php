<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('idCategoria');
            $table->unsignedBigInteger('idDepartamento');
            $table->text('titulo');
            $table->longText('descripcion')->nullable();
            $table->integer('status');
            $table->text('imagen');
            $table->timestamps();
            $table->foreign('idDepartamento')->references('idDepartamento')->on('departamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
