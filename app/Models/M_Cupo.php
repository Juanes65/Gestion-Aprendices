<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Cupo extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function m_dormitorios(){
        return $this->belongsTo('App\Models\M_Dormitorio', 'total_habitaciones_m', 'id');
    }
}
