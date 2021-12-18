<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemonstrativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demonstratives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('socio');
            $table->string('cpf')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('empresa');
            $table->string('cpf_cnpj')->nullable();
            $table->string('tomador');
            $table->integer('taxa_desconto')->nullable();
            $table->string('pagamento_statu')->nullable();
            $table->date('pagamento_date')->nullable();
            $table->string('pagamento_previsao')->nullable();
            $table->decimal('valor_bruto', 10,2);
            $table->decimal('saldo', 10,2);
            $table->text('descricao')->nullable();
            $table->date('date_emissao');
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
        Schema::dropIfExists('demonstratives');
    }
}
