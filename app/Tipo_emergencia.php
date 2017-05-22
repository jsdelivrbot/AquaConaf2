<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tipo_emergencia.
 *
 * @author  The scaffold-interface created at 2017-05-15 02:57:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Tipo_emergencia extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'tipo_emergencias';

	

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
