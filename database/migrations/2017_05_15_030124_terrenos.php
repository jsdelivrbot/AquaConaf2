<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Terrenos.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:01:24am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Terrenos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('terrenos',function (Blueprint $table){

        $table->increments('id');
        
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
        Schema::drop('terrenos');
    }
}
