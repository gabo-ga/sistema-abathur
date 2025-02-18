<?php

namespace App\Http\Controllers;

use App\Models\MovimientoStock;
use Illuminate\Http\Request;

class MovimientoStockController extends Controller
{
    public function index(){
        $movimientos = MovimientoStock::all();
        return response()->json($movimientos, 200);
    }

    public function store(Request $request){
        $request->validate([
            'tipo_movimiento' => 'required',
            'cantidad' => 'required',
            'motivo' => 'required',
            'fecha_movimiento' => 'required',
            'user_id' => 'required',
            'lote_id' => 'required',
        ]);

        $movimiento = MovimientoStock::create($request->all());

        return response()->json([
            'message' => 'Movimiento creado',
            'movimiento' => $movimiento
            ], 201);
    }

    public function show($id){
        $movimiento = MovimientoStock::find($id);

        if($movimiento){
            return response()->json($movimiento, 200);
        } else {
            return response()->json([
                'message' => 'Movimiento no encontrado'
            ], 404);
        }
    }

    public function update(Request $request, $id){
        $movimiento = MovimientoStock::find($id);

        if($movimiento){
            $request->validate([
                'tipo_movimiento' => 'required',
                'cantidad' => 'required',
                'motivo' => 'required',
                'fecha_movimiento' => 'required',
                'user_id' => 'required',
                'lote_id' => 'required',
            ]);
            $movimiento->update($request->all());
            return response()->json([
                'message' => 'Movimiento actualizado',
                'movimiento' => $movimiento
            ], 200);
        } else {
            return response()->json([
                'message' => 'Movimiento no encontrado'
            ], 404);
        }
    }

    public function destroy($id){
        $movimiento = MovimientoStock::find($id);

        if($movimiento){
            $movimiento->delete();
            return response()->json([
                'message' => 'Movimiento eliminado'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Movimiento no encontrado'
            ], 404);
        }
    }
    
}
