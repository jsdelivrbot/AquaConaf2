<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Terreno.
 *
 * @author  The scaffold-interface created at 2017-05-15 03:01:24am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Terreno extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'terrenos';

	

	/**
     * info_junta_vecino.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function info_junta_vecinos()
    {
        return $this->belongsToMany('App\Info_junta_vecino');
    }

    /**
     * Assign a info_junta_vecino.
     *
     * @param  $info_junta_vecino
     * @return  mixed
     */
    public function assignInfo_junta_vecino($info_junta_vecino)
    {
        return $this->info_junta_vecinos()->attach($info_junta_vecino);
    }
    /**
     * Remove a info_junta_vecino.
     *
     * @param  $info_junta_vecino
     * @return  mixed
     */
    public function removeInfo_junta_vecino($info_junta_vecino)
    {
        return $this->info_junta_vecinos()->detach($info_junta_vecino);
    }


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


	/**
     * bitacora_terreno.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function bitacora_terrenos()
    {
        return $this->belongsToMany('App\Bitacora_terreno');
    }

    /**
     * Assign a bitacora_terreno.
     *
     * @param  $bitacora_terreno
     * @return  mixed
     */
    public function assignBitacora_terreno($bitacora_terreno)
    {
        return $this->bitacora_terrenos()->attach($bitacora_terreno);
    }
    /**
     * Remove a bitacora_terreno.
     *
     * @param  $bitacora_terreno
     * @return  mixed
     */
    public function removeBitacora_terreno($bitacora_terreno)
    {
        return $this->bitacora_terrenos()->detach($bitacora_terreno);
    }

}
