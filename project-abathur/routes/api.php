<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedicamentosController;
use App\Http\Controllers\ProveedorController;

Route::get('/medicamentos', [MedicamentosController::class, 'index']);
Route::get('/medicamentos/{id}', [MEdicamentosController::class, 'show']);
Route::post('/medicamentos', [MedicamentosController::class, 'store']);
Route::put('/medicamentos/{id}', [MedicamentosController::class, 'update']);
Route::delete('/medicamentos/{id}', [MedicamentosController::class, 'destroy']);

Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::get('/proveedores/{id}', [ProveedorController::class, 'show']);
Route::post('/proveedores', [ProveedorController::class, 'store']);
Route::put('/proveedores/{id}', [ProveedorController::class, 'update']);
Route::delete('/proveedores/{id}', [ProveedorController::class, 'destroy']);



?>
