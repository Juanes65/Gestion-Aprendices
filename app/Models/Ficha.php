<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function aprendices(){
        return $this->hasMany('App\Models\Aprendice', 'aprendiz_fiha', 'id');
    }

    public function cupos(){
        return $this->hasMany('App\Models\Cupo', 'total_cupos_h', 'id');
    }

    public function m_cupos(){
        return $this->hasMany('App\Models\M_Cupo', 'total_cupos_m', 'id');
    }
}
