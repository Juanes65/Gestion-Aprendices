<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    use HasFactory;

    protected $fillable = [
        'desayuno',
        'almuerzo',
        'cena',
    ];

    public function aprendices(){
        return $this->belongsTo('App\Models\Aprendice', 'aprendiz_consumos', 'id');
    }
}
