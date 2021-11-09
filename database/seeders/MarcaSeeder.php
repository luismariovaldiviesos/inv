<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([
            'nombre' => 'ACER'
        ]);
        Marca::create([
            'nombre' => 'ADITKO'
        ]);
        Marca::create([
            'nombre' => 'ARI'
        ]);
        Marca::create([
            'nombre' => 'DELL'
        ]);
        Marca::create([
            'nombre' => 'HASSE'
        ]);
        Marca::create([
            'nombre' => 'HP'
        ]);
        Marca::create([
            'nombre' => 'ULTRATECH'
        ]);
        Marca::create([
            'nombre' => 'XTRATECH'
        ]);



        // MARCAS IMPRESOREAS - TELEFONO -SCANNER

        Marca::create([
            'nombre' => 'ALCATEL'
        ]);
        Marca::create([
            'nombre' => 'CANON'
        ]);

        Marca::create([
            'nombre' => 'CISCO'
        ]);
        Marca::create([
            'nombre' => 'EPSON'
        ]);
        Marca::create([
            'nombre' => 'FUJITSU'
        ]);
        Marca::create([
            'nombre' => 'HP'
        ]);
        Marca::create([
            'nombre' => 'HP SCANJET'
        ]);

        Marca::create([
            'nombre' => 'SHARP'
        ]);
        Marca::create([
            'nombre' => 'XEROX'
        ]);
        Marca::create([
            'nombre' => 'ZEBRA'
        ]);



        // REVISAR MARCAS DE PERIF4ERICOS MOUSE TECLADO Y MONITOR
        //mouse
        Marca::create([
            'nombre' => 'ALTEK PC'
        ]);
        Marca::create([
            'nombre' => 'ARGUS'
        ]);
        Marca::create([
            'nombre' => 'COMPAQ'
        ]);

        Marca::create([
            'nombre' => 'GENIUS'
        ]);
        Marca::create([
            'nombre' => 'GENERICO'
        ]);
        Marca::create([
            'nombre' => 'JOYSUN'
        ]);
        Marca::create([
            'nombre' => 'KLIP'
        ]);
        Marca::create([
            'nombre' => 'LOGITECH'
        ]);
        Marca::create([
            'nombre' => 'SPEEDMIND'
        ]);
        Marca::create([
            'nombre' => 'TARGUS'
        ]);

        Marca::create([
            'nombre' => 'HP-COMPAQ'
        ]);


        //TECLADOS
        Marca::create([
            'nombre' => 'ADIKTO'
        ]);


        //MONITORES
        Marca::create([
            'nombre' => 'LG'
        ]);
        Marca::create([
            'nombre' => 'SAMSUNG'
        ]);



    }
}
