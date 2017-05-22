<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlertasEstado_alertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('alertas_estado_alertas',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('alerta_id')->unsigned()->index();
			$table->foreign('alerta_id')->references('id')->on('alertas')->onDelete('cascade');
			$table->integer('estado_alerta_id')->unsigned()->index();
			$table->foreign('estado_alerta_id')->references('id')->on('estado_alertas')->onDelete('cascade');
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
        Schema::drop('alertas_estado_alertas');
    }
}
