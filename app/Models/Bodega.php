<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_bodega',
        'descripcion_bodega',
        'direccion_bodega',
    ];
    // public function solicitudes(){
    //     return $this->hasMany('App\Models\Area', 'area', 'id');
    // }

    public function productos(){
        return $this->hasMany('App\Models\Producto', 'bodega', 'id');
    }

    public function areas(){
        return $this->hasMany('App\Models\Area', 'bodega', 'id');
    }
}
