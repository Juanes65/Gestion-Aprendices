<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CupoDelete extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_ingreso',
        'fecha_salida',
        'fk_estudiantes',
        'fk_dormitorios'
    ];

    public function dormitorios(){
        return $this->belongsTo('App\Models\Dormitorio', 'fk_dormitorios', 'id');
    }

    public function aprendices(){
        return $this->belongsTo('App\Models\Aprendice', 'fk_estudiantes', 'id');
    }
}
