<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nombre', 'provincia_id'
    ];

    // un canto pertence a una provincia

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

    // un canton tiene varios edificios

    public function edificios()
    {
        return $this->hasMany(Edificio::class);
    }


}
