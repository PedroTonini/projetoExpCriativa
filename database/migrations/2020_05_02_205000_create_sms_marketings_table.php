<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsMarketingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_marketings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('conteudo');
            $table->bigInteger('promocao_id')->unsigned();
            $table->timestamps();

            $table->foreign('promocao_id')->references('id')->on('promocaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sms_marketings');
    }
}
