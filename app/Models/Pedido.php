<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'platillo',
        'producto',
        'sugerido',
    ];
    
    public function platillo(){
        return $this->belongsTo('App\Models\Platillo', 'platillo', 'id');
    }

    public function producto(){
        return $this->belongsTo('App\Models\Producto', 'producto', 'id');
    }
}
