<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MedicamentosController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\MovimientoStockController;

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

Route::get('/lote', [LoteController::class, 'index']);
Route::get('/lote/{id}', [LoteController::class, 'show']);
Route::post('/lote', [LoteController::class, 'store']);
Route::put('/lote/{id}', [LoteController::class, 'update']);
Route::delete('/lote/{id}', [LoteController::class, 'destroy']);

Route::get('/movimientos', [MovimientoStockController::class, 'index']);
Route::get('/movimientos/{id}', [MovimientoStockController::class, 'show']);
Route::post('/movimientos', [MovimientoStockController::class, 'store']);
Route::put('/movimientos/{id}', [MovimientoStockController::class, 'update']);
Route::delete('/movimientos/{id}', [MovimientoStockController::class, 'destroy']);

?>
