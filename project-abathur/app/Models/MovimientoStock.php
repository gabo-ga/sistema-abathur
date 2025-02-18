<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoStock extends Model
{
    use HasFactory;

    protected $table = 'movimiento_stock';

    protected $fillable = [
        'tipo_movimiento',
        'cantidad',
        'motivo',
        'fecha_movimiento',
        'user_id',
        'lote_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lote()
    {
        return $this->belongsTo(Lote::class);
    }

}
