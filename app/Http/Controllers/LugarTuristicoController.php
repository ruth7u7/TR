<?php

namespace App\Http\Controllers;

use App\Models\LugarTuristico;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class LugarTuristicoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function mostrarlugares()
    {
        $lt=LugarTuristico::get();
        return response()->json($lt);
    }

    public function crear(Request $request){
        $post = new LugarTuristico();
        $post->nombre=$request->nombre;
        if($request->hasFile("foto"))
        {
            $foto=$request->file("foto");
            $nombrefoto= Str::slug($request->nombre).".".$foto->guessExtension();
            $ruta = public_path("img/LugaresTuristicos/");       
            $foto->move($ruta,$nombrefoto);

            $post->foto=$nombrefoto;
        }
        $post->save();
        return response()->json(["Respuesta" => "Se ha creado correctamente un Lugar turistico"]);
    }

    public function actualizar(Request $request, $idlt)
    {
        $datos=LugarTuristico::find($idlt);
        $datos->fill([
            'nombre'=>$request->nombre,
            'foto'=>$request->foto,
            'descripcion'=>$request->descripcion
        ])->save();
        return response()->json(["Respuesta" => "Lugar Turistico actualizado correctamente"]);
    }

    public function eliminar($idlt)
    {
        DB::beginTransaction();
        try
        {
            $datos = LugarTuristico::find($idlt);
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
