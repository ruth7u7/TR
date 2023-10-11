<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class CiudadController extends Controller
{

    public function mostrarCiudad()
    {
        /*$ciudads = Ciudad::paginate();
        return view('ciudad.index', compact('ciudads'))
            ->with('i', (request()->input('page', 1) - 1) * $ciudads->perPage());*/
        $ciudad=Ciudad::get();
        return response()->json($ciudad);
    }

    public function crear(Request $request)
    {
        Ciudad::create([
            'nombre'=>$request->nombre
        ]);
        return response()->json(["Respuesta" => "Se ha creado correctamente una ciudad"]);
    }

    public function actualizar(Request $request, $id)
    {
        $datos=Ciudad::find($id);
        $datos->fill([
            'nombre'=>$request->nombre
        ])->save();
        return response()->json(["Respuesta" => "Ciudad actualizado correctamente"]);
    }

    public function eliminar($id)
    {
        DB::beginTransaction();
        try
        {
            $datos = Ciudad::find($id);
            if($datos)
            {
                $datos->delete();
                DB::commit();
                return response()->json(["Respuesta" => "Ciudad eliminada correctamente"]);
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
