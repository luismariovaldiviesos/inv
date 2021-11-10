<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nombre', 'marca_id'
    ];

    // un modelo pertenece a una marca

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

     // un modelo  tiene varios tis (telefonos-imprsoras-scanners)

     public function tis ()
     {
         return $this->hasMany(Tis::class);
     }

     // un modelo  tiene varios periferics

    public function perifericos ()
    {
        return $this->hasMany(Periferico::class);
    }

     // un modelo  tiene varios compus

     public function compus ()
     {
         return $this->hasMany(Computadora::class);
     }



}
