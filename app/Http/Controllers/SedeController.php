<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class SedeController extends Controller
{

    public function index()
    {
        /*$sedes = Sede::paginate();
        return view('sede.index', compact('sedes'))
            ->with('i', (request()->input('page', 1) - 1) * $sedes->perPage());*/
        $sede=Sede::get();
        return response()->json($sede);
    }

    public function crear(Request $request)
    {
        Sede::create([
            'id_ciudad'=>$request->id_ciudad,
            'nombre'=>$request->nombre,
            'numero_trabajadores'=>$request->numero_trabajadores,
            'numero_buses'=>$request->numero_buses,
            'telefono'=>$request->telefono
        ]);
        return response()->json(["Respuesta" => "Se ha creado correctamente una sede"]);
    }

    public function actualizar(Request $request, $id)
    {
        $datos=Sede::find($id);
        $datos->fill([
            'id_ciudad'=>$request->id_ciudad,
            'nombre'=>$request->nombre,
            'numero_trabajadores'=>$request->numero_trabajadores,
            'numero_buses'=>$request->numero_buses,
            'telefono'=>$request->telefono
        ])->save();
        return response()->json(["Respuesta" => "Sede actualizada correctamente"]);
    }

    public function eliminar($id)
    {
        DB::beginTransaction();
        try
        {
            $datos = Sede::find($id);
            if($datos)
            {
                $datos->delete();
                DB::commit();
                return response()->json(["Respuesta" => "Sede eliminada correctamente"]);
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

