<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lote extends Model
{
    use HasFactory;

    protected $table = 'lotes';

    protected $fillable = [
        'medicamento_id',
        'proveedor_id',
        'cantidad_inicial',
        'cantidad_actual',
        'fecha_vencimiento',
        'fecha_fabricacion',
        'numero_lote'
    ];

    public function movimiento(){
        return $this->hasMany(MovimientoStock::class);
    }

    public function proveedor(){
        return $this->hasOne(Proveedor::class);
    }

    public function medicamento(){
        return $this->hasOne(Medicamento::class);
    }
}
