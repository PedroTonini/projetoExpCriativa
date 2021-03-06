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
            $table->integer('opiAtendimento');
            $table->integer('opiPreco');
            $table->integer('opiMarca');
            $table->integer('opiProduto');
            $table->bigInteger('compra_id')->unsigned();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('compra_id')->references('id')->on('compras');
            $table->foreign('user_id')->references('id')->on('users');
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
