<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'provedor',
        'etiqueta',
        'hora',
        'nombre_producto',
        'unidad_medida',
        'fecha_caducidad',
        'marca_producto',
        'clasificacion_producto',
        'stock_actual',
        'stock_minimo',
        'recibo',
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

    public function provedores(){
        return $this->belongsTo('App\Models\Provedore', 'provedor', 'id');
    }
}
