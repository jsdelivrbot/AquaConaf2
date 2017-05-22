<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlertasTipo_emergencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('alertas_tipo_emergencias',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('alerta_id')->unsigned()->index();
			$table->foreign('alerta_id')->references('id')->on('alertas')->onDelete('cascade');
			$table->integer('tipo_emergencia_id')->unsigned()->index();
			$table->foreign('tipo_emergencia_id')->references('id')->on('tipo_emergencias')->onDelete('cascade');
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
        Schema::drop('alertas_tipo_emergencias');
    }
}
