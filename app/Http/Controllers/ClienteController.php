<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class ClienteController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function mostrarcliente()
    {
        /*$clientes = Cliente::paginate();
        return view('cliente.index', compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * $clientes->perPage());*/
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

    public function actualizar(Request $request, $id)
    {
        $datos=Cliente::find($id);
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

    public function eliminar($id)
    {
        DB::beginTransaction();
        try
        {
            $datos = Cliente::find($id);
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
