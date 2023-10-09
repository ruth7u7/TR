<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Trabajador extends Model
{
    /*
    static $rules = [
		'estado_registro' => 'required',
    ];
    protected $perPage = 20;
    */

    protected $table = 'trabajador';
    protected $fillable = array(
                            'nombre',
                            'apellido',
                            'estado_registro'
    );

    protected $primaryKey = 'id';

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];



}
