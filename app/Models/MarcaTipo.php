<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaTipo extends Model
{
    use HasFactory;
    protected $table = 'marca_tipo';
    protected $fillable =
    [
        'marca_id', 'tipo_id'
    ];

}
