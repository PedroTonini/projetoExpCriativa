<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientePromocaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_promocaos', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('promocao_id')->unsigned();
            $table->timestamps();
            $table->tinyInteger('status')->default('0');            

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('cliente_promocaos');
    }
}
