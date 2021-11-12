<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tis extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nombre','serie','af','ac','modelo_id','unidad_id','tipo_id','user_id'
    ];

     // un tis(telefono-impresora-scanner)  pertence a una unidad

     public function unidad()
     {
         return $this->belongsTo(Unidad::class);
     }

     // un tis(telefono-impresora-scanner)  pertence a un modelo

     public function modelo()
     {
         return $this->belongsTo(Modelo::class);
     }
}
