<?php

namespace App\Http\Controllers;

use App\Models\Fecha;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;


class FechaController extends Controller
{

    public function index()
    {
        /*$fechas = Fecha::paginate();

        return view('fecha.index', compact('fechas'))
            ->with('i', (request()->input('page', 1) - 1) * $fechas->perPage());*/
        $fecha=Fecha::get();
        return response()->json($fecha);
    }

    public function crear(Request $request)
    {
        Fecha::create([
            'hora'=>$request->hora,
            'fecha'=>$request->fecha
        ]);
        return response()->json(["Respuesta" => "Se ha creado correctamente una fecha"]);
    }

    public function actualizar(Request $request, $id)
    {
        $datos=Fecha::find($id);
        $datos->fill([
            'hora'=>$request->hora,
            'fecha'=>$request->fecha
        ])->save();
        return response()->json(["Respuesta" => "Fecha actualizada correctamente"]);
    }

    public function eliminar($id)
    {
        DB::beginTransaction();
        try
        {
            $datos = Fecha::find($id);
            if($datos)
            {
                $datos->delete();
                DB::commit();
                return response()->json(["Respuesta" => "Fecha eliminada correctamente"]);
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
