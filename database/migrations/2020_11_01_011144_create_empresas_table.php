<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('llave primaria autoincremento');
            $table->string('nombre')->comment('nombre empresa');
            $table->string('eslogan')->nullable()->comment('eslogan empresa');
            $table->string('nit')->nullable()->comment('nombre empresa');
            $table->string('direccion')->nullable()->comment('direccion empresa');
            $table->string('barrio')->nullable()->comment('barrio empresa');
            $table->string('departamento')->nullable()->comment('departamento empresa');
            $table->string('ciudad')->nullable()->comment('ciudad empresa');
            $table->string('pais')->nullable()->comment('pais empresa');
            $table->string('pbx')->nullable()->comment('pbx empresa');
            $table->string('telefono')->nullable()->comment('telefono empresa');
            $table->string('celular')->nullable()->comment('celular empresa');
            $table->string('fax')->nullable()->comment('fax empresa');
            $table->string('email')->nullable()->comment('email empresa');
            $table->string('whatsapp')->nullable()->comment('whatsapp empresa');
            $table->string('facebook')->nullable()->comment('facebook empresa');
            $table->string('instagram')->nullable()->comment('instagram empresa');

            $table->timestamps();

            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
