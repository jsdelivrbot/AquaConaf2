<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlertasClase_incendios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('alertas_clase_incendios',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('alerta_id')->unsigned()->index();
			$table->foreign('alerta_id')->references('id')->on('alertas')->onDelete('cascade');
			$table->integer('clase_incendio_id')->unsigned()->index();
			$table->foreign('clase_incendio_id')->references('id')->on('clase_incendios')->onDelete('cascade');
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
        Schema::drop('alertas_clase_incendios');
    }
}
