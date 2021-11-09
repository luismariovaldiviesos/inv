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


    // un tipo tiene varios tis

    public  function tis ()
    {
        return $this->hasMany(Tis::class);
    }

    // un tipo tiene varios perifericos

    public  function perifericos ()
    {
        return $this->hasMany(Periferico::class);
    }

    // un tipo tiene varios compus

    public  function compus ()
    {
        return $this->hasMany(Computadora::class);
    }
}
