<?php

namespace App\Http\Controllers;

use App\Models\Bu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class BuController extends Controller
{

    public function mostrarBus()
    {
        /*$bus = Bu::paginate();

        return view('bu.index', compact('bus'))
            ->with('i', (request()->input('page', 1) - 1) * $bus->perPage());*/
        $bu=Bu::get();
        return response()->json($bu);
    }

    public function crear(Request $request)
    {
        Bu::create([
            'moledo'=>$request->moledo,
            'placa'=>$request->placa,
            'marca'=>$request->marca
        ]);
        return response()->json(["Respuesta" => "Se ha creado correctamente un bus"]);
    }

    public function actualizar(Request $request, $id)
    {
        $datos=Bu::find($id);
        $datos->fill([
            'moledo'=>$request->moledo,
            'placa'=>$request->placa,
            'marca'=>$request->marca
        ])->save();
        return response()->json(["Respuesta" => "Bus actualizado correctamente"]);
    }

    public function eliminar($id)
    {
        DB::beginTransaction();
        try
        {
            $datos = Bu::find($id);
            if($datos)
            {
                $datos->delete();
                DB::commit();
                return response()->json(["Respuesta" => "Bus eliminado correctamente"]);
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
