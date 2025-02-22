<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lote extends Model
{
    use HasFactory;

    protected $table = 'lotes';

    protected $fillable = [
        'proveedor_id',
        'cantidad_inicial',
        'cantidad_actual',
        'fecha_vencimiento',
        'fecha_fabricacion',
        'numero_lote'
    ];

    public function movimiento_stock(){
        return $this->hasMany(MovimientoStock::class);
    }

    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }

    public function medicamento_lote(){
        return $this->belongsToMany(Medicamento::class, 'medicamentos_lotes', 'lote_id', 'medicamento_id');
    }
}
