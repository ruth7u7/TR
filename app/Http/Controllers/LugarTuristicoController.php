<?php

namespace App\Http\Controllers;

use App\Models\LugarTuristico;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;


class LugarTuristicoController extends Controller
{
    public function mostrarlugares()
    {
        $lt=LugarTuristico::get();
        return response()->json($lt);
    }

    public function crear(Request $request){
        LugarTuristico::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
        ]);
        return response()->json(["Respuesta" => "Se ha creado correctamente un Lugar turistico"]);
    }

    public function actualizar(Request $request, $lt)
    {
        $datos=LugarTuristico::find($lt);
        $datos->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion
        ])->save();
        return response()->json(["Respuesta" => "Lugar Turistico actualizado correctamente"]);
    }

    public function eliminar($lt)
    {
        DB::beginTransaction();
        try
        {
            $datos = LugarTuristico::find($lt);
            if($datos)
            {
                $datos->delete();
                DB::commit();
                return response()->json(["Respuesta" => "Lugar turistico eliminado correctamente"]);
            }
            else{
                return response()->json(["Respuesta" => "Registro no encontrado"]);
            }
        }
        catch (Exception $e) {
                DB::rollBack();
                return response()->json(["Respuesta" => "Error","Error" => $e]);
        }
    }
    
}
