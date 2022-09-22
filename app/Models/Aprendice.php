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
        'estado',
        'fecha_inicial',
        'fecha_final',
        'habitacion',
        'aprendiz_ficha'
    ];

    public function fichas(){
        return $this->belongsTo('App\Models\Ficha', 'aprendiz_ficha', 'id');
    }

    public function novedades(){
        return $this->hasMany('App\Models\Novedad', 'aprendiz', 'id');
    }

    public function consumos(){
        return $this->hasMany('App\Models\Consumo', 'aprendiz_consumos', 'id');
    }

    public function cupos(){
        return $this->hasMany('App\Models\Cupo', 'fk_estudiantes', 'id');
    }
}
