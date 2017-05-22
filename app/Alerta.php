<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Alerta.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:00:41am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Alerta extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'alertas';

	

	/**
     * clase_incendio.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function clase_incendios()
    {
        return $this->belongsToMany('App\Clase_incendio');
    }

    /**
     * Assign a clase_incendio.
     *
     * @param  $clase_incendio
     * @return  mixed
     */
    public function assignClase_incendio($clase_incendio)
    {
        return $this->clase_incendios()->attach($clase_incendio);
    }
    /**
     * Remove a clase_incendio.
     *
     * @param  $clase_incendio
     * @return  mixed
     */
    public function removeClase_incendio($clase_incendio)
    {
        return $this->clase_incendios()->detach($clase_incendio);
    }


	/**
     * tipo_emergencia.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function tipo_emergencias()
    {
        return $this->belongsToMany('App\Tipo_emergencia');
    }

    /**
     * Assign a tipo_emergencia.
     *
     * @param  $tipo_emergencia
     * @return  mixed
     */
    public function assignTipo_emergencia($tipo_emergencia)
    {
        return $this->tipo_emergencias()->attach($tipo_emergencia);
    }
    /**
     * Remove a tipo_emergencia.
     *
     * @param  $tipo_emergencia
     * @return  mixed
     */
    public function removeTipo_emergencia($tipo_emergencia)
    {
        return $this->tipo_emergencias()->detach($tipo_emergencia);
    }


	/**
     * estado_alerta.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function estado_alertas()
    {
        return $this->belongsToMany('App\Estado_alerta');
    }

    /**
     * Assign a estado_alerta.
     *
     * @param  $estado_alerta
     * @return  mixed
     */
    public function assignEstado_alerta($estado_alerta)
    {
        return $this->estado_alertas()->attach($estado_alerta);
    }
    /**
     * Remove a estado_alerta.
     *
     * @param  $estado_alerta
     * @return  mixed
     */
    public function removeEstado_alerta($estado_alerta)
    {
        return $this->estado_alertas()->detach($estado_alerta);
    }


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
