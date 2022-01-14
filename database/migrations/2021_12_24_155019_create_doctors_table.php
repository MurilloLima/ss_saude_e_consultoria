<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * 
     * 
     */

    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('cpf');
            $table->string('crm');
            $table->string('rg');
            $table->string('estado_civil');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('banco');
            $table->string('agencia');
            $table->string('conta');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('local_servico');
            $table->string('servico_prestado');
            $table->string('servico_cnpj');
            $table->string('servico_endereco');
            $table->string('servico_telefone');
            $table->string('servico_email')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
