<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedicamentosController;

Route::get('/medicamentos', [MedicamentosController::class, 'index']);
Route::get('/medicamentos/{id}', [MEdicamentosController::class, 'show']);
Route::post('/medicamentos', [MedicamentosController::class, 'store']);
Route::put('/medicamentos/{id}', [MedicamentosController::class, 'update']);
Route::delete('/medicamentos/{id}', [MedicamentosController::class, 'destroy']);

?>
