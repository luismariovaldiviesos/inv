<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nombre', 'marca_id','tipo_id'
    ];



    public  function tipo()
    {
        return  $this->belongsTo(Tipo::class);
    }

    // un modelo pertenece a una marca

    public  function marca()
    {
        return  $this->belongsTo(Marca::class);
    }



}
