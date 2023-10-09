<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    /*
    static $rules = [
		'hora' => 'required',
		'fecha' => 'required',
    ];
    protected $perPage = 20;
    */
    protected $table = 'fecha';
    protected $fillable = array(
                            'hora',
                            'fecha'
    );

    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'id_fecha', 'id');
    }


}
