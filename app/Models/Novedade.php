<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novedade extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_novedad',
        'descripcion_P',
        'fecha_Info',
        'desayuno',
        'almuerzo',
        'cena',
        'aprendiz'
    ];

    public function aprendices(){
        return $this->belongsTo('App\Models\Aprendiz', 'aprendiz', 'id');
    }
}
