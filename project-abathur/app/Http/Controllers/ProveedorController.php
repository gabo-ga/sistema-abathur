<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        $proveedores = Proveedor::all();
        return response()->json($proveedores, 200);
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'direccion' => 'required',
        ]);

        $proveedor = Proveedor::create($request->all());

        return response()->json([
            'message' => 'Proveedor creado',
            'proveedor' => $proveedor
            ], 201);
    }

    public function show($id){
        $proveedor = Proveedor::find($id);

        if($proveedor){
            return response()->json($proveedor, 200);
        } else {
            return response()->json([
                'message' => 'Proveedor no encontrado'
            ], 404);
        }
    }

    public function update(Request $request, $id){
        $proveedor = Proveedor::find($id);

        if($proveedor){
            $request->validate([
                'nombre' => 'required',
                'telefono' => 'required',
                'email' => 'required',
                'direccion' => 'required',
            ]);
            $proveedor->update($request->all());
            return response()->json([
                'message' => 'Proveedor actualizado',
                'proveedor' => $proveedor
            ], 200);
        } else {
            return response()->json([
                'message' => 'Proveedor no encontrado'
            ], 404);
        }
    }

    public function destroy($id){
        $proveedor = Proveedor::find($id);

        if($proveedor){
            $proveedor->delete();
            return response()->json([
                'message' => 'Proveedor eliminado'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Proveedor no encontrado'
            ], 404);
        }
    }
}
