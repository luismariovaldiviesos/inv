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

    public function unidad()
    {
        return $this->belongsTo(Edificio::class);
    }
}
