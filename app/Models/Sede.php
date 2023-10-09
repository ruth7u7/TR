<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    /*
    static $rules = [
		'nombre' => 'required',
		'numero_trabajadores' => 'required',
		'numero_buses' => 'required',
		'telefono' => 'required',
    ];
    protected $perPage = 20;
    */
    protected $table = 'sede';
    protected $fillable = array(
                            'id_ciudad',
                            'nombre',
                            'numero_trabajadores',
                            'numero_buses',
                            'telefono'
    );

    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];


    public function ciudad()
    {
        return $this->hasOne('App\Models\Ciudad', 'id', 'id_ciudad');
    }
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'id_sede', 'id');
    }


}
