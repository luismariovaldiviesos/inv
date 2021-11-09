<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nombre', 'ram','dd','serie','af','ac','modelo_id','unidad_id','tipo_id','user_id'
    ];
}
