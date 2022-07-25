<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendice extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cc',
        'nombre',
        'apellido',
        'edad',
        'genero',
        'desayuno',
        'almuerzo',
        'cena',
        'observaciones',
        'fecha_ingreso',
        'fecha_salida',
        'aprendiz_ficha'
    ];

    public function fichas(){
        return $this->belongsTo('App\Models\Ficha', 'aprendiz_fiha', 'id');
    }

    public function reportes(){
        return $this->hasMany('App\Models\Reporte', 'comida_aprendiz', 'id');
    }
}
