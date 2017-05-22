<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Alertas.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:00:42am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Alertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('alertas',function (Blueprint $table){

        $table->increments('id');
        
        $table->dateTime('Fecha_alerta');
        
        $table->double('latitud');
        
        $table->double('longitud');
        
        /**
         * Foreignkeys section
         */
        
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('alertas');
    }
}
