<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Info_junta_vecinosTerrenos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('info_junta_vecinos_terrenos',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('info_junta_vecino_id')->unsigned()->index();
			$table->foreign('info_junta_vecino_id')->references('id')->on('info_junta_vecinos')->onDelete('cascade');
			$table->integer('terreno_id')->unsigned()->index();
			$table->foreign('terreno_id')->references('id')->on('terrenos')->onDelete('cascade');
			/**
			 * Type your addition here
			 *
			 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('info_junta_vecinos_terrenos');
    }
}
