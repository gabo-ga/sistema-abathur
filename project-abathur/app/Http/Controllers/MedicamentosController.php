<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedicamentosController extends Controller
{
    public function index(){
        $medicamentos = Medicamento::all();
        return view('medicamentoIndex', compact('medicamentos'));
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'presentacion' => 'required',
            'descripcion' => 'required'
        ]);

        $medicamento = Medicamento::create($request->all());

        if($medicamento){
            return redirect()->route('medicamento.all');
        } else {
            return response()->json([
                'message' => 'Error al registrar el medicamento'
            ], 400);
        }
    }

    public function show($id){
        $medicamento = Medicamento::find($id);

        if($medicamento){
            return response()->json($medicamento, 200);
        } else {
            return response()->json([
                'message' => 'Medicamento no encontrado'
            ], 404);
        }
    }

    public function update(Request $request, $id){
        $medicamento = Medicamento::find($id);

        if($medicamento){
            $request->validate([
                'nombre' => 'required',
                'presentacion' => 'required',
                'descripcion' => 'required'
            ]);
            $medicamento->update($request->all());
            return response()->json([
                'message' => 'Medicamento actualizado',
                'medicamento' => $medicamento
            ], 200);
        } else {
            return response()->json([
                'message' => 'Medicamento no encontrado'
            ], 404);
        }
    }

    public function destroy($id){
        $medicamento = Medicamento::find($id);

        if($medicamento){
            $medicamento->delete();
            return response()->json([
                'message' => 'Medicamento eliminado'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Medicamento no encontrado'
            ], 404);
        }
    }

}
