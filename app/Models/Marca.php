<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nombre'
    ];


    // una marca tiene varios modelos
    public function  modelos()
    {
        return $this->hasMany(Modelo::class);
    }
}
