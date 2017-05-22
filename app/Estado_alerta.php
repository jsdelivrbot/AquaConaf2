<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estado_alerta.
 *
 * @author  The scaffold-interface created at 2017-05-15 02:56:26am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Estado_alerta extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'estado_alertas';

	

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
