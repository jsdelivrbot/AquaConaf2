<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Bitacora_terrenos.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:02:51am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class BitacoraTerrenos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('bitacora_terrenos',function (Blueprint $table){

        $table->increments('id');
        
        $table->dateTime('fecha_inico_terreno');
        
        $table->dateTime('fecha_termino_terreno');
        
        $table->float('duracion_terreno');
        
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
        Schema::drop('bitacora_terrenos');
    }
}
