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

     // un perriferico  pertence a una unidad

     public function unidad()
     {
         return $this->belongsTo(Unidad::class);
     }

     // un periferico pertenece a un tipo
     public function tipo()
     {
         return $this->belongsTo(Tipo::class);
     }

     // un periferico pertenece a un modelo
     public function modelo()
     {
         return $this->belongsTo(Modelo::class);
     }
}
