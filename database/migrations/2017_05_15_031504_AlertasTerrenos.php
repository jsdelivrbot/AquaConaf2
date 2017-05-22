<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlertasTerrenos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('alertas_terrenos',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('alerta_id')->unsigned()->index();
			$table->foreign('alerta_id')->references('id')->on('alertas')->onDelete('cascade');
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
        Schema::drop('alertas_terrenos');
    }
}
