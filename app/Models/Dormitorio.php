<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dormitorio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_dor',
        'camas',
        'disponible',
        'ubicacion',
        'genero',
        'espacio',
        'estado'
    ];

    public function cupos(){
        return $this->hasMany('App\Models\Cupo', 'fk_dormitorios', 'id');
    }
}
