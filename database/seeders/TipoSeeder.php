<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create([
            'nombre' => 'PC'
        ]);
        Tipo::create([
            'nombre' => 'LAPTOP'
        ]);
        Tipo::create([
            'nombre' => 'MONITOR'
        ]);
        Tipo::create([
            'nombre' => 'TECLADO'
        ]);
        Tipo::create([
            'nombre' => 'MOUSE'
        ]);
        Tipo::create([
            'nombre' => 'TELEFONO'
        ]);
        Tipo::create([
            'nombre' => 'IMPRESORA'
        ]);
        Tipo::create([
            'nombre' => 'SCANNER'
        ]);

    }
}
