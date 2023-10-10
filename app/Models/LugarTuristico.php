<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LugarTuristico extends Model
{
    protected $table = 'lugar_turistico';
    protected $fillable = array (
                            'nombre',
                            'foto',
                            'descripcion',
                            'estado_registro'
    );
    protected $primaryKey = 'id';
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];
    public function ciudad(){
    //return $this->HasOne(nombredelaclase::class)
    } 
}
