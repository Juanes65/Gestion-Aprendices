<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupo extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function dormitorios(){
        return $this->belongsTo('App\Models\Dormitorio', 'total_habitaciones_h', 'id');
    }
}
