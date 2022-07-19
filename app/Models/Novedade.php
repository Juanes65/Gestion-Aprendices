<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novedade extends Model
{
    use HasFactory;

    public function reportes(){
        return $this->hasMany('App\Models\Reporte', 'novedad_aprendiz', 'id');
    }
}
