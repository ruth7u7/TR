<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /*
    static $rules = [
		'estado_registro' => 'required',
    ];
    protected $perPage = 20;
    */

    protected $table = 'cliente';
    protected $fillable = array(
                            'nombre',
                            'apellido',
                            'direccion',
                            'dni',
                            'celular',
                            'correo',
                            'contraseña',
                            'estado_registro'
    );
    protected $primaryKey = 'id';

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'id_cliente', 'id');
    }


}
