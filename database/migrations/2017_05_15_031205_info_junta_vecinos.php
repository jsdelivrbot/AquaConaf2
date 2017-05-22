<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Info_junta_vecinos.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:12:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class InfoJuntaVecinos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('info_junta_vecinos',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nombre_encargado');
        
        $table->String('telefono_celular_encargado');
        
        $table->String('correo_electronico_encargado');
        
        $table->String('sector_encargado');
        
        $table->String('calle_pasaje_encargado');
        
        $table->String('villa_poblacion_encargado');
        
        $table->integer('numero_casa_encargado');
        
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
        Schema::drop('info_junta_vecinos');
    }
}
