<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periferico extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nombre', 'serie','af','modelo_id','unidad_id','tipo_id','user_id'
    ];
}