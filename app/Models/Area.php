<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_area',
        'codigo',
    ];
    public function productos(){
        return $this->hasMany('App\Models\Producto', 'area', 'id');
    }

    public function bodegas(){
        return $this->belongsTo('App\Models\Bodega', 'bodega', 'id');
    }
}
