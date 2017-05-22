<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Info_junta_vecino.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:12:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Info_junta_vecino extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'info_junta_vecinos';

	

	/**
     * terreno.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function terrenos()
    {
        return $this->belongsToMany('App\Terreno');
    }

    /**
     * Assign a terreno.
     *
     * @param  $terreno
     * @return  mixed
     */
    public function assignTerreno($terreno)
    {
        return $this->terrenos()->attach($terreno);
    }
    /**
     * Remove a terreno.
     *
     * @param  $terreno
     * @return  mixed
     */
    public function removeTerreno($terreno)
    {
        return $this->terrenos()->detach($terreno);
    }

}
