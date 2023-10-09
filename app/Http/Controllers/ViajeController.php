<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class ViajeController extends Controller
{

    public function index()
    {
        /*$viajes = Viaje::paginate();

        return view('viaje.index', compact('viajes'))
            ->with('i', (request()->input('page', 1) - 1) * $viajes->perPage());*/
        $viaje=Viaje::get();
        return response()->json($viaje);
    }

    public function crear(Request $request)
    {
        Viaje::create([
            'id_cliente'=>$request->id_cliente,
            'id_fecha'=>$request->id_fecha,
            'id_sede'=>$request->id_sede,
            'id_bus'=>$request->id_bus,
            'destino'=>$request->destino,
            'duracion_viaje'=>$request->duracion_viaje,
            'costo'=>$request->costo
        ]);
        return response()->json(["Respuesta" => "Se ha creado correctamente un viaje"]);
    }

    public function actualizar(Request $request, $id)
    {
        $datos=Viaje::find($id);
        $datos->fill([
            'id_cliente'=>$request->id_cliente,
            'id_fecha'=>$request->id_fecha,
            'id_sede'=>$request->id_sede,
            'id_bus'=>$request->id_bus,
            'destino'=>$request->destino,
            'duracion_viaje'=>$request->duracion_viaje,
            'costo'=>$request->costo
        ])->save();
        return response()->json(["Respuesta" => "Viaje actualizado correctamente"]);
    }

    public function eliminar($id)
    {
        DB::beginTransaction();
        try
        {
            $datos = Viaje::find($id);
            if($datos)
            {
                $datos->delete();
                DB::commit();
                return response()->json(["Respuesta" => "Viaje eliminado correctamente"]);
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
