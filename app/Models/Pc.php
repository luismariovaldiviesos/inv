<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pc extends Model
{
    use HasFactory;



    protected $fillable =
    [
        'nombre', 'ram','dd','serie','af','ac','modelo_id','user_id','unidad_id'
    ];


    // una pc pertenece a una unidad

    public function unidad()
    {
        return $this->belongsTo(Unidad::class);
    }

    // una pc pertenece a un modelo

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    // una pc pertenece a un user (OJO TIENE QUE LLAMARSE IGUAL QIE EL MODELO (USER EN ESTE CASO))
    public function user()
    {
        return $this->belongsTo(User::class);
    }


















}
