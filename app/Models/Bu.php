<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
    /*
    static $rules = [
		'modelo' => 'required',
		'placa' => 'required',
		'marca' => 'required',
    ];

    protected $perPage = 20;
    */

    protected $table = 'bus';
    protected $fillable = array(
                        'modelo',
                        'placa',
                        'marca'
    );

    protected $primaryKey = 'id';

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'id_bus', 'id');
    }


}
