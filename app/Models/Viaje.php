<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    /*
    static $rules = [
		'destino' => 'required',
		'duracion_viaje' => 'required',
		'costo' => 'required',
    ];
    protected $perPage = 20;
    */

    protected $table = 'viaje';
    protected $fillable = array(
                            'id_cliente',
                            'id_fecha',
                            'id_sede',
                            'id_bus',
                            'destino',
                            'duracion_viaje',
                            'costo'
    );

    protected $primaryKey = 'id';

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];


    public function bu()
    {
        return $this->hasOne('App\Models\Bu', 'id', 'id_bus');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fecha()
    {
        return $this->hasOne('App\Models\Fecha', 'id', 'id_fecha');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sede()
    {
        return $this->hasOne('App\Models\Sede', 'id', 'id_sede');
    }


}
