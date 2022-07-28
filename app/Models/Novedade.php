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
        'nombre',
        'fecha_Info',
        'desayuno',
        'almuerzo',
        'cena',
    ];

    public function reportes(){
        return $this->hasMany('App\Models\Reporte', 'novedad_aprendiz', 'id');
    }
}
