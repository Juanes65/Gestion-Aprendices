<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto',
        'unidad_medida',
        'fecha_caducidad',
        'marca_producto',
        'clasificacion_producto',
        'stock_actual',
        'stock_minimo',
        'lote_producto',
        'fecha_llegada',
        'area',
    ];
    public function areas(){
        return $this->belongsTo('App\Models\Area', 'area', 'id');
    }

    public function pedido(){
        return $this->hasMany('App\Models\Pedido', 'producto', 'id');
    }
}
