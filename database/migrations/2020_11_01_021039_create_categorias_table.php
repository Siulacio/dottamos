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
            $table->bigIncrements('id')->comment('llave primaria autoincremento');
            $table->string('nombre')->comment('nombre categoria producto');
            $table->string('descripcion')->nullable()->comment('descripcion categoria');
            $table->integer('orden')->comment('orden visualización de categorias');
            $table->boolean('estado')->default(1)->comment('1:Activo, 0:Inactivo');
            
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
        Schema::dropIfExists('categorias');
    }
}
