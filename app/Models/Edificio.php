<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'nombre', 'canton_id'
    ];

    // un edificio pertence a un canton

    public function canton()
    {
        return $this->belongsTo(Canton::class);
    }

    // un edificio tiene varias unidaddes

    public function unidades()
    {
        return $this->hasMany(Unidad::class);
    }
}

