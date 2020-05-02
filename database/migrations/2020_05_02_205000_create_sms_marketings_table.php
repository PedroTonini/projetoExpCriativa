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
            $table->timestamps();
            $table->integer('id');
            $table->string('conteudo');
            $table->integer('promocao_id');
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
