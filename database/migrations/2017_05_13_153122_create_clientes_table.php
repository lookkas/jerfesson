<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cliente', function (Blueprint $table) {
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
        Schema::dropIfExists('Cliente');
    }
}
