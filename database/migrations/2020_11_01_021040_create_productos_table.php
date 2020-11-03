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
            $table->bigIncrements('id')->comment('llave primaria autoincremento');
            $table->string('nombre')->comment('nombre producto');
            $table->string('descripcion')->nullable()->comment('descripción del producto');
            $table->string('imagen')->nullable()->comment('imágen producto');
            $table->unsignedBigInteger('categoria_id')->comment('llave foranea tabla categorias');
            $table->string('precio')->comment('precio del produto');
            $table->integer('orden')->comment('orden visualización de productos');
            $table->boolean('destacado')->default(0)->comment('muestra el producto en la página principal 0:No destacado, 1:Destacado');
            $table->boolean('estado')->default(1)->comment('1:Activo, 0:Inactivo');

            //llaves foraneas
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->timestamps();
            
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';
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
