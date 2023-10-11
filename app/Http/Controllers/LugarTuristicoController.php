<?php

namespace App\Http\Controllers;

use App\Models\LugarTuristico;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class LugarTuristicoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function mostrarlugares()
    {
        /*$lugarTuristicos = LugarTuristico::paginate();

        return view('lugar-turistico.index', compact('lugarTuristicos'))
            ->with('i', (request()->input('page', 1) - 1) * $lugarTuristicos->perPage());*/
        $lugar_turistico=LugarTuristico::get();
        return response()->json($lugar_turistico);
    }

    public function crear(Request $request){
        $post = new LugarTuristico();
        $post->nombre=$request->nombre;
        if($request->hasFile("foto"))
        {
            $foto=$request->file("foto");
            $nombrefoto= Str::slug($request->nombre).".".$foto->guessExtension();
            $ruta = public_path("img/LugaresTuristicos/");
            $foto->move($ruta, $nombrefoto);

            $post->foto = "http://127.0.0.1:8000/img/LugaresTuristicos/" . $nombrefoto;
        }
        $post->save();
        return response()->json(["Respuesta" => "Se ha creado correctamente un Lugar turistico"]);
    }

    public function actualizar(Request $request, $id)
    {
        $datos=LugarTuristico::find($id);
        $datos->fill([
            'nombre'=>$request->nombre,
            'foto'=>$request->foto,
            'descripcion'=>$request->descripcion
        ])->save();
        return response()->json(["Respuesta" => "Lugar turístico actualizado correctamente"]);
    }

    public function eliminar($id)

    {
        DB::beginTransaction();
        try
        {
            $datos = LugarTuristico::find($id);
            if($datos)
            {
                $datos->delete();
                DB::commit();
                return response()->json(["Respuesta" => "Lugar turístico eliminado correctamente"]);
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
