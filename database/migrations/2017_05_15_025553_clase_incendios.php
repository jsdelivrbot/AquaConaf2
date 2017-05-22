<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Clase_incendios.
 *
 * @author  The scaffold-interface created at 2017-05-15 02:55:54am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ClaseIncendios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('clase_incendios',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nombre_clase_incendio');
        
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
        Schema::drop('clase_incendios');
    }
}
