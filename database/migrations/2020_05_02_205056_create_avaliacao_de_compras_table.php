<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoDeComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_de_compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('opiAtendimento');
            $table->integer('opiPreco');
            $table->integer('opiMarca');
            $table->integer('opiProduto');
            $table->integer('clienteLogado_id');
            $table->integer('compra_id');
            $table->integer('funcionario_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacao_de_compras');
    }
}
