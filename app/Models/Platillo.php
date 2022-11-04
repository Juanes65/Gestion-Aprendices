<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_platillo',
        'cantidad_1',
        'cantidad_2',
        'cantidad_3',
        'cantidad_4',
        'cantidad_5',
        'ingre_1',
        'ingre_2',
        'ingre_3',
        'ingre_4',
        'ingre_5',
    ];
    public function platillo_solicitud(){
        return $this->hasMany('App\Models\Platillo_Solcitude', 'platillo', 'id');
    }

    public function pedido(){
        return $this->hasMany('App\Models\Pedido', 'platillo', 'id');
    }
}
