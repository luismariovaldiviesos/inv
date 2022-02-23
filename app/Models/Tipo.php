<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nombre'
    ];

    // un  tipo pertenece a varias marcas
    // public function marcas(){
    //     return $this->belongsToMany(Marca::class,'marca_tipo');
    // }

    // un tipo tiene varios modelos
    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }







}
