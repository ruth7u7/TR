<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class TrabajadorController extends Controller
{

    public function mostrartrabajador()
    {
        /*$trabajadors = Trabajador::paginate();

        return view('trabajador.index', compact('trabajadors'))
            ->with('i', (request()->input('page', 1) - 1) * $trabajadors->perPage());*/
        $trabajador=Trabajador::get();
        return response()->json($trabajador);

    }

    public function crear(Request $request)
    {
        Trabajador::create([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'estado_registro'=>$request->estado_registro
        ]);
        return response()->json(["Respuesta" => "Se ha creado correctamente un trabajador"]);
    }

    public function actualizar(Request $request, $id)
    {
        $datos=Trabajador::find($id);
        $datos->fill([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'estado_registro'=>$request->estado_registro
        ])->save();
        return response()->json(["Respuesta" => "Trabajador actualizado correctamente"]);
    }

    public function eliminar($id)
    {
        DB::beginTransaction();
        try
        {
            $datos = Trabajador::find($id);
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
