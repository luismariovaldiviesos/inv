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


    // una compu  pertence a una unidad

    public function unidad()
    {
        return $this->belongsTo(Unidad::class);
    }

    // una compu  pertence a un modelo

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }
}
