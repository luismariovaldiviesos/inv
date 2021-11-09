<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Canton;

class CantonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Canton::create([
            'nombre' => 'Cuenca',
            'provincia_id' => 1
        ]);
        Canton::create([
            'nombre' => 'Gualaceo',
            'provincia_id' => 1
        ]);
        Canton::create([
            'nombre' => 'Paute',
            'provincia_id' => 1
        ]);
        Canton::create([
            'nombre' => 'Sigsig',
            'provincia_id' => 1
        ]);
        Canton::create([
            'nombre' => 'Giron',
            'provincia_id' => 1
        ]);
        Canton::create([
            'nombre' => 'Santa Isabel',
            'provincia_id' => 1
        ]);
        Canton::create([
            'nombre' => 'Oña',
            'provincia_id' => 1
        ]);
        Canton::create([
            'nombre' => 'Nabon',
            'provincia_id' => 1
        ]);
        Canton::create([
            'nombre' => 'Ponce Enriquez',
            'provincia_id' => 1
        ]);
    }
}
