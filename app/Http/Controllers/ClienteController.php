<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class ClienteController extends Controller
{
    public function mostrarcliente()
    {
        $cliente=Cliente::get();
        return response()->json($cliente);
    }

    public function crear(Request $request)
    {
        Cliente::create([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'direccion'=>$request->direccion,
            'dni'=>$request->dni,
            'celular'=>$request->celular,
            'correo'=>$request->correo,
            'contraseña'=>$request->contraseña
        ]);
        return response()->json(["Respuesta" => "Se ha creado correctamente un cliente"]);
    }

    public function actualizar(Request $request, $idcliente)
    {
        $datos=Cliente::find($idcliente);
        $datos->fill([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'direccion'=>$request->direccion,
            'dni'=>$request->dni,
            'celular'=>$request->celular,
            'correo'=>$request->correo,
            'contraseña'=>$request->contraseña
        ])->save();
        return response()->json(["Respuesta" => "Cliente actualizado correctamente"]);
    }

    public function eliminar($idcliente)
    {
        DB::beginTransaction();
        try 
        {
            $datos = Cliente::find($idcliente);
            if($datos)
            {
                $datos->delete();
                DB::commit();
                return response()->json(["Respuesta" => "Cliente eliminado correctamente"]);
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