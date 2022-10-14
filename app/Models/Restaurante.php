<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_desayunos',
        'total_almuerzos',
        'total_cenas',
        'ficha_restaurante',
    ];

    public function reportes(){
        return $this->hasMany('App\Models\Reporte', 'restaurante', 'id');
    }

    public function solicitudes(){
        return $this->hasMany('App\Models\Solicitude', 'solicitud', 'id');
    }

    public function fichas(){
        return $this->belongsTo('App\Models\Ficha', 'ficha_restaurante', 'id');
    }
}
