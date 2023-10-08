<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrabajadorController extends Controller
{
    public function mostrartrabajador()
    {
        $trabajador=Trabajador::get();
        return response()->json($trabajador);
    }

    public function crear(Request $request)
    {
        Trabajador::create([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'direccion'=>$request->direccion,
            'dni'=>$request->dni,
            'celular'=>$request->celular,
            'correo'=>$request->correo,
            'contraseña'=>$request->contraseña
        ]);
        return response()->json(["Respuesta" => "Se ha creado correctamente un trabajador"]);
    }

    public function actualizar(Request $request, $idtrabajador)
    {
        $datos=Trabajador::find($idtrabajador);
        $datos->fill([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'direccion'=>$request->direccion,
            'dni'=>$request->dni,
            'celular'=>$request->celular,
            'correo'=>$request->correo,
            'contraseña'=>$request->contraseña
        ])->save();
        return response()->json(["Respuesta" => "Trabajador actualizado correctamente"]);
    }

    public function eliminar($idtrabajador)
    {
        DB::beginTransaction();
        try
        {
            $datos = Trabajador::find($idtrabajador);
            if($datos)
            {
                $datos->delete();
                DB::commit();
                return response()->json(["Respuesta" => "Trabajador eliminado correctamente"]);
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
