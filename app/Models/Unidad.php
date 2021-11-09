<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nombre', 'edificio_id'
    ];

    // una unidad  pertence a un edificio

    public function edificio()
    {
        return $this->belongsTo(Edificio::class);
    }


    // una unidad tiene varios tis (telefonos-imprsoras-scanners)

    public function tis ()
    {
        return $this->hasMany(Tis::class);
    }

    // una unidad tiene varios periferics

    public function perifericos ()
    {
        return $this->hasMany(Periferico::class);
    }

     // una unidad tiene varios compus

     public function compus ()
     {
         return $this->hasMany(Computadora::class);
     }
}
