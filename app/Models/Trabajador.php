<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajador';
    protected $fillable = array (
                            'id',
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
    //Las demás relaciones
    //cargo(), sede()
}
