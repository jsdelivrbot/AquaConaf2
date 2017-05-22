<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Clase_incendio.
 *
 * @author  The scaffold-interface created at 2017-05-15 02:55:54am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Clase_incendio extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'clase_incendios';

	

	/**
     * alerta.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function alertas()
    {
        return $this->belongsToMany('App\Alerta');
    }

    /**
     * Assign a alerta.
     *
     * @param  $alerta
     * @return  mixed
     */
    public function assignAlerta($alerta)
    {
        return $this->alertas()->attach($alerta);
    }
    /**
     * Remove a alerta.
     *
     * @param  $alerta
     * @return  mixed
     */
    public function removeAlerta($alerta)
    {
        return $this->alertas()->detach($alerta);
    }

}
