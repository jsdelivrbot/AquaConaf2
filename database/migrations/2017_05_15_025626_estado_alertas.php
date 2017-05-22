<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Estado_alertas.
 *
 * @author  The scaffold-interface created at 2017-05-15 02:56:26am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class EstadoAlertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('estado_alertas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nombre_estado_alerta');
        
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
        Schema::drop('estado_alertas');
    }
}
