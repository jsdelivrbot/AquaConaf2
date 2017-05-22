<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Tipo_emergencias.
 *
 * @author  The scaffold-interface created at 2017-05-15 02:57:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class TipoEmergencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('tipo_emergencias',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nombre_tipo_alerta');
        
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
        Schema::drop('tipo_emergencias');
    }
}
