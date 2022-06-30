<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inpeccione extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo',
        'nombre',
        'apellido',
        'tipo',
        'descripcion',
        'fecha',
        'area',
        'foto'
    ];
}
