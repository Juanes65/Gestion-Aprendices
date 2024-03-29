<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $fillable = [
        'ficha',
        'origen',
        'tutor',
        'carrera',
        'estudiante_m',
        'estudiante_h',
        'hora_e',
        'hora_s',
        'fecha_i',
        'fecha_s',
    ];

    public function aprendices(){
        return $this->hasMany('App\Models\Aprendice', 'aprendiz_ficha', 'id');
    }

    public function restaurantes(){
        return $this->hasMany('App\Models\Restaurante', 'ficha_restaurante', 'id');
    }
}
