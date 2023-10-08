<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = array (
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
    public function viaje(){
    //return $this->BelongsTo(Aqui va el nombre de la clase de viaje::class);
    }
}
