<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Dormitorio extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function m_cupos(){
        return $this->hasMany('App\Models\M_Cupo', 'total_habitaciones_m', 'id');
    }
}
