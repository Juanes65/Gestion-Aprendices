<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_platillo',
        'ingre_1',
        'ingre_2',
        'ingre_3',
        'ingre_4',
        'ingre_5',
    ];
}
