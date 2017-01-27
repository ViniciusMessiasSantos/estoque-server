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
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sexo');
            $table->date('data_nascimento');
            $table->string('cpf');
            $table->string('rg');
            $table->string('profissao');
            $table->string('telefone');
            $table->string('celular');
            $table->integer('endereco_id')->unsigned();
            $table->timestamps();

            $table->foreign('endereco_id')
                ->references('id')
                ->on('enderecos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
