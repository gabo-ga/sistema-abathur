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
}
