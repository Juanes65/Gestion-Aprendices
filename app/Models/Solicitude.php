<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad_desayunos',
        'cantidad_almuerzos',
        'cantidad_cenas',
        'solicitud',
        'fecha_registro',
    ];
    public function restaurantes(){
        return $this->belongsTo('App\Models\Restaurante', 'solicitud', 'id');
    }

    public function platillo_solicitude(){
        return $this->hasMany('App\Models\Platillo_Solcitude', 'solicitud', 'id');
    }
}
