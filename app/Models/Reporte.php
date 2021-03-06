<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'desayuno',
        'almuerzo',
        'cena',
        'fecha'
    ];

    public function aprendices(){
        return $this->belongsTo('App\Models\Aprendice', 'comida_aprendiz', 'id');
    }

    public function novedades(){
        return $this->belongsTo('App\Models\Novedad', 'novedad_aprendiz', 'id');
    }
}
