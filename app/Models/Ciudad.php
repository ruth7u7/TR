<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{

    /*
    static $rules = [
		'nombre' => 'required',
    ];
    protected $perPage = 20;
     */
    protected $table = 'ciudad';
    protected $fillable = array('nombre');

    protected $primaryKey = 'id';

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function lugarTuristicos()
    {
        return $this->hasMany('App\Models\LugarTuristico', 'id_ciudad', 'id');
    }

    public function sedes()
    {
        return $this->hasMany('App\Models\Sede', 'id_ciudad', 'id');
    }


}
