<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentosController;

Route::get('/', function () {
    return view('welcome');
});


# Ruta lista de medicamentos
Route::get('/medicamento',
    [MedicamentosController::class, 'index']
)->name('medicamento.all');

# Ruta para la vista del formulario
Route::get('/registro', function(){
    return view('medicamentoForm');
})->name('medicamento.form');

# Ruta para el registro de un medicamento (retornar a la lista de medicamentos)
Route::post('/medicamento',
    [MedicamentosController::class, 'store'])
->name('medicamento.store');

#Ruta para el detalle de un medicamento
Route::get('/medicamento/{id}', [MedicamentosController::class, 'show'])->name('medicamento.show');

Route::put('/medicamento/{id}', [MedicamentosController::class, 'update'])->name('medicamento.update');
Route::delete('/medicamento/{id}', [MedicamentosController::class, 'destroy'])->name('medicamento.destroy');
