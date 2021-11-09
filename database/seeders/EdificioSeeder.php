<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Edificio;

class EdificioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Edificio::create([
            'nombre' => 'Complejo Judicial Bloque A',
            'canton_id' => 1
        ]);
        Edificio::create([
            'nombre' => 'Complejo Judicial Bloque B',
            'canton_id' => 1
        ]);
        Edificio::create([
            'nombre' => 'Corte Provincial del Azuay',
            'canton_id' => 1
        ]);
        Edificio::create([
            'nombre' => 'Edificio Judicial de Gualaceo',
            'canton_id' => 2
        ]);
        Edificio::create([
            'nombre' => 'Edificio Judicial de Paute',
            'canton_id' => 3
        ]);
        Edificio::create([
            'nombre' => 'Edificio Judicial de Sigsig',
            'canton_id' => 4
        ]);
        Edificio::create([
            'nombre' => 'Edificio Judicial de Giron',
            'canton_id' => 5
        ]);
        Edificio::create([
            'nombre' => 'Edificio Judicial de Santa Isabel',
            'canton_id' => 6
        ]);
        Edificio::create([
            'nombre' => 'Edificio Judicial de Oña',
            'canton_id' => 7
        ]);
        Edificio::create([
            'nombre' => 'Edificio Judicial de Nabon',
            'canton_id' => 8
        ]);
        Edificio::create([
            'nombre' => 'Edificio Judicial de Ponce Enriquez',
            'canton_id' => 9
        ]);
    }
}
