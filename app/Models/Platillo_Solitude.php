<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo_Solitude extends Model
{
    use HasFactory;

    protected $fillable = [
        'platillo',
        'solicitud',
        'total',
        'total2',
        'total3',
        'total4',
        'total5',
    ];
    public function solicitud(){
        return $this->belongsTo('App\Models\Solicitude', 'solicitud', 'id');
    }

    public function platillo(){
        return $this->belongsTo('App\Models\Platillo', 'platillos', 'id');
    }
}
