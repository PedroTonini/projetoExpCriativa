<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoFuncsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao__funcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('opiEntrosamento');
            $table->text('opiTexto');
            $table->bigInteger('funcionario_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacao__funcs');
    }
}
