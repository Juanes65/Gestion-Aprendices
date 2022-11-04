<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provedore extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'empresa',
        'nombre_pro',
        'cantidad',
        'unidad',
        'lote',
        'fecha',
        'hora',
    ];
    
}
