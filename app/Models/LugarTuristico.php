<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LugarTuristico extends Model
{
    /*
    static $rules = [
		'estado_registro' => 'required',
    ];
    protected $perPage = 20;
    */
    protected $table = 'lugar_turistico';
    protected $fillable = array(
                            'nombre',
                            'descripcion',
                            'id_ciudad',
                            'estado_registro'
    );

    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function ciudad()
    {
        return $this->hasOne('App\Models\Ciudad', 'id', 'id_ciudad');
    }


}
