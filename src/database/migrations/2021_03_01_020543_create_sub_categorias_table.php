<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categorias', function (Blueprint $table) {
            $table->id('idSubCategoria');
            $table->unsignedBigInteger('idCategoria');
            $table->string('titulo');
            $table->longText('descripcion');
            $table->text('imagen');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('idCategoria')->references('idCategoria')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categorias');
    }
}
