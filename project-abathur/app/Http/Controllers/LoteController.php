<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use Illuminate\Http\Request;

class LoteController extends Controller
{
    public function index(){
        $lotes = Lote::all();
        return response()->json($lotes, 200);
    }

    public function store(Request $request){
        $request->validate([
            'numero_lote' => 'required',
            'medicamento_id' => 'required',
            'proveedor_id' => 'required',
            'cantidad_inicial' => 'required', //cantidad y cantidad inicial no deberian ser lo mismo?
            'cantidad_actual' => 'required',
            'fecha_fabricacion' => 'required',
            'fecha_vencimiento' => 'required',
        ]);

        $lote = Lote::create($request->all());

        return response()->json([
            'message' => 'Lote creado',
            'lote' => $lote
            ], 201);
    }

    public function show($id){
        $lote = Lote::find($id);

        if($lote){
            return response()->json($lote, 200);
        } else {
            return response()->json([
                'message' => 'Lote no encontrado'
            ], 404);
        }
    }
    public function update(Request $request, $id){
        $lote = Lote::find($id);

        if($lote){
            $request->validate([
                'numero_lote' => 'required',
                'medicamento_id' => 'required',
                'proveedor_id' => 'required',
                'cantidad_inicial' => 'required',
                'cantidad_actual' => 'required',
                'fecha_fabricacion' => 'required',
                'fecha_vencimiento' => 'required',
            ]);
            $lote->update($request->all());
            return response()->json([
                'message' => 'Lote actualizado',
                'lote' => $lote
            ], 200);
        } else {
            return response()->json([
                'message' => 'Lote no encontrado'
            ], 404);
        }
    }

    public function destroy($id){
        $lote = Lote::find($id);

        if($lote){
            $lote->delete();
            return response()->json([
                'message' => 'Lote eliminado'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Lote no encontrado'
            ], 404);
        }
    }
}
