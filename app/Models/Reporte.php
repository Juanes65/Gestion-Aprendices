<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    public function restaurantes(){
        return $this->belongsTo('App\Models\Restaurante', 'restaurante', 'id');
    }
}
