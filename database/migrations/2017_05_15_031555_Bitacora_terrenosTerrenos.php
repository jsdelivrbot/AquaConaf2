<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bitacora_terrenosTerrenos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('bitacora_terrenos_terrenos',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('bitacora_terreno_id')->unsigned()->index();
			$table->foreign('bitacora_terreno_id')->references('id')->on('bitacora_terrenos')->onDelete('cascade');
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
        Schema::drop('bitacora_terrenos_terrenos');
    }
}
