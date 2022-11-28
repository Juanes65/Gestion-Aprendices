<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provedore extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'empresa',
    ];

    public function productos(){
        return $this->hasMany('App\Models\Producto', 'provedor', 'id');
    }
}
