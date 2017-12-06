<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');

            $table->integer('telefone');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('complemento');
            $table->integer('numero');
            $table->string('email');
            $table->string('comentario');
            $table->string('imagem');
            //$table->integer('id_staus')->unsigned()->nullable();
            //$table->foreign('id_staus')->references('id')->on('status');

            $table->timestamps();
            $table->string('uf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}


