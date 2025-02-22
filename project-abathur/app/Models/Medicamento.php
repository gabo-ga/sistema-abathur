<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicamento extends Model
{
    use HasFactory;

    protected $table = 'medicamentos';

    protected $fillable = [
        'nombre',
        'presentacion',
        'descripcion'
    ];

    public function medicamento_lote(){
        return $this->belongsToMany(Medicamento::class, 'medicamentos_lotes', 'medicamento_id', 'lote_id');
    }

}
