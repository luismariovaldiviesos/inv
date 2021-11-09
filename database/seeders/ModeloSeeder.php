<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modelo;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // modelos pc hp
        Modelo::create([
            'nombre' => '6000',
            'marca_id' => 6
        ]);

        Modelo::create([
            'nombre' => '6000 PRO',
            'marca_id' => 6
        ]);

        Modelo::create([
            'nombre' => '6730B',
            'marca_id' => 6
        ]);

        Modelo::create([
            'nombre' => '8100 ELITE',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'DC7600',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'DC7800',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'DC7900',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'ELITEBOOK 8440P',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'PROBOOK 640',
            'marca_id' => 6
        ]);

        // modelos pc ADIKTO
        Modelo::create([
            'nombre' => 'ADIKTO',
            'marca_id' => 2
        ]);

         // modelos pc acer
         Modelo::create([
            'nombre' => 'ASPIRE 4752',
            'marca_id' => 1
        ]);
        Modelo::create([
            'nombre' => 'ASPIRE M3970',
            'marca_id' => 1
        ]);

          // modelos pc ARI
          Modelo::create([
            'nombre' => 'KALLPA-AGP64F1',
            'marca_id' => 3
        ]);

         // modelos pc dell
         Modelo::create([
            'nombre' => 'LATITUDE E 6420',
            'marca_id' => 4
        ]);

        Modelo::create([
            'nombre' => 'LATITUDE E 6430',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'LATITUDE E 6440',
            'marca_id' => 4
        ]);

        Modelo::create([
            'nombre' => 'OPTIPLEX 790',
            'marca_id' => 4
        ]);

        Modelo::create([
            'nombre' => 'OPTIPLEX 9010',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'OPTIPLEX 990',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'LATITUDE E 6430',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'LATITUDE E 6440',
            'marca_id' => 4
        ]);

         // modelos pc hasse
         Modelo::create([
            'nombre' => 'TOUCH',
            'marca_id' => 5
        ]);
        // modelos pc ultratech
        Modelo::create([
            'nombre' => 'ULTRATECH',
            'marca_id' => 7
        ]);
        // modelos pc xtratech
        Modelo::create([
            'nombre' => 'XTRATECH',
            'marca_id' => 8
        ]);



         // modelos laptop hp
         Modelo::create([
            'nombre' => '6730B',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'ELITEBOOK 8440P',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'PROBOOK 640',
            'marca_id' => 6
        ]);

         // modelos laptop acer
         Modelo::create([
            'nombre' => 'ASPIRE 4752',
            'marca_id' => 1
        ]);

           // modelos laptop dell
           Modelo::create([
            'nombre' => 'LATITUDE E 6420',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'LATITUDE E 6430',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'LATITUDE E 6440',
            'marca_id' => 4
        ]);

         // modelos laptop ultratech
         Modelo::create([
            'nombre' => 'ULTRATECH',
            'marca_id' => 7
        ]);

        //****MONITORES*********** */


        // modelos MONITOR ACER
        Modelo::create([
            'nombre' => 'P206HV',
            'marca_id' => 1
        ]);
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 1
        ]);
        Modelo::create([
            'nombre' => 'P206H',
            'marca_id' => 1
        ]);
        Modelo::create([
            'nombre' => 'P206HV',
            'marca_id' => 1
        ]);

         // modelos MONITOR ARI
         Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 3
        ]);
        Modelo::create([
            'nombre' => 'VL2040',
            'marca_id' => 3
        ]);

          // modelos MONITOR DELL
          Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => '18.5" TIPO FLAT PANEL',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'APR2012',
            'marca_id' => 4
        ]);

        Modelo::create([
            'nombre' => 'E1911',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'E1911C',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'E1912HC',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'P1705B',
            'marca_id' => 4
        ]);
        Modelo::create([
            'nombre' => 'V203HL',
            'marca_id' => 4
        ]);

         // modelos MONITOR hp
         Modelo::create([
            'nombre' => 'LE1851W',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'LE1901W',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 6
        ]);

        Modelo::create([
            'nombre' => 'LCD L1710',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'LE1901W',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'HP-1851',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'L1506',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => ' L1706',
            'marca_id' => 6
        ]);

        Modelo::create([
            'nombre' => 'L1908w',
            'marca_id' => 6
        ]);


        // LG
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 30
        ]);

        //****MONITORES*********** */


        //****MOUSES*********** */
        //mouses ACER
        Modelo::create([
            'nombre' => 'WIRED OPTICAL MOUSE',
            'marca_id' => 1
        ]);

        //mouses altek-pc
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 19
        ]);

         //mouses ARGUS
         Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 20
        ]);
        //mouses compaq
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 21
        ]);

          // mouses MONITOR DELL
          Modelo::create([
            'nombre' => 'MS111-P',
            'marca_id' => 4
        ]);

          // mouses GENIUS
          Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 22
        ]);

         // mouses hp
         Modelo::create([
            'nombre' => 'KB-0316',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 6
        ]);
        Modelo::create([
            'nombre' => '417441',
            'marca_id' => 6
        ]);

        // mouses joysun
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 24
        ]);

         // mouses klip
         Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 25
        ]);

        // mouses logitech
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 26
        ]);
        // mouses SPEEDMIND
         Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 27
        ]);
        // mouses targus
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 28
        ]);

        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 7
        ]);
        //****MOUSES*********** */



        //****teclados*********** */
        //taclado acer
        Modelo::create([
            'nombre' => 'SK-9621',
            'marca_id' => 1
        ]);
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 1
        ]);

        //teclado ADIKTO
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 2
        ]);
         //teclado altek-pc
         Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 19
        ]);

         //teclado dell
         Modelo::create([
            'nombre' => 'KB212-B',
            'marca_id' => 4
        ]);

         //teclado genius
         Modelo::create([
            'nombre' => 'KB-120',
            'marca_id' => 22
        ]);

          //teclado hp
          Modelo::create([
            'nombre' => 'KB-0316',
            'marca_id' => 6
        ]);

        //teclado hp-compaq
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 29
        ]);

        //teclado ultratech
        Modelo::create([
            'nombre' => 'SIN-MODELO',
            'marca_id' => 7
        ]);

        //****teclados*********** */


        //****PERIFERICOS*********** */
         // impresoras

         //impresora sharp
        Modelo::create([
            'nombre' => 'AR-1651CS',
            'marca_id' => 16
        ]);

         //impresora sharp
         Modelo::create([
            'nombre' => 'AR-1651CS',
            'marca_id' => 16
        ]);
        Modelo::create([
            'nombre' => 'AR-5220',
            'marca_id' => 16
        ]);
        //impresora epson
        Modelo::create([
            'nombre' => 'FX-890',
            'marca_id' => 12
        ]);
        Modelo::create([
            'nombre' => 'LX-300',
            'marca_id' => 12
        ]);

        //impresora HP
        Modelo::create([
            'nombre' => '4050',
            'marca_id' => 6
        ]);

         //impresora XEROX
         Modelo::create([
            'nombre' => 'PHASER 3320',
            'marca_id' => 17
        ]);

        Modelo::create([
            'nombre' => 'PHASER 3435',
            'marca_id' => 17
        ]);
        Modelo::create([
            'nombre' => 'PHASER 3600',
            'marca_id' => 17
        ]);
        Modelo::create([
            'nombre' => 'PHASER 3635',
            'marca_id' => 17
        ]);
        Modelo::create([
            'nombre' => 'PHASER 6360',
            'marca_id' => 17
        ]);
        Modelo::create([
            'nombre' => 'PHASER 6700',
            'marca_id' => 17
        ]);
        Modelo::create([
            'nombre' => 'WC 4118',
            'marca_id' => 17
        ]);
        Modelo::create([
            'nombre' => 'WC 4265',
            'marca_id' => 17
        ]);
        Modelo::create([
            'nombre' => 'WC 5330',
            'marca_id' => 17
        ]);

        //impresora ZEBRA
        Modelo::create([
            'nombre' => 'TLP 2844',
            'marca_id' => 18
        ]);


         // SCANNER

          //SCANNER CANON
        Modelo::create([
            'nombre' => 'DR-G1100',
            'marca_id' => 10
        ]);

         //SCANNER FUJITSU
         Modelo::create([
            'nombre' => 'SCAN SNAP N1800',
            'marca_id' => 13
        ]);

        //SCANNER HP
        Modelo::create([
            'nombre' => 'SCANJET 5590',
            'marca_id' => 6
        ]);

         //SCANNER XEROX
         Modelo::create([
            'nombre' => 'DOCUMATE 3125',
            'marca_id' => 17
        ]);
        Modelo::create([
            'nombre' => 'DOCUMATE 162',
            'marca_id' => 17
        ]);


        // telefonos

        //telefono alcatel
        Modelo::create([
         'nombre' => '4020',
         'marca_id' => 9
         ]);
         Modelo::create([
            'nombre' => '4021',
            'marca_id' => 9
            ]);
            Modelo::create([
                'nombre' => 'IP TOUCH 4018',
                'marca_id' => 9
                ]);
                Modelo::create([
                    'nombre' => 'IP TOUCH 4028',
                    'marca_id' => 9
                    ]);


        //telefono cisco
        Modelo::create([
            'nombre' => 'CP-6921',
            'marca_id' => 11
            ]);

            Modelo::create([
                'nombre' => 'IP PHONE 6921',
                'marca_id' => 11
                ]);

                Modelo::create([
                    'nombre' => 'IP PHONE 7911',
                    'marca_id' => 11
                    ]);
                    Modelo::create([
                        'nombre' => 'IP PHONE 7965',
                        'marca_id' => 11
                        ]);
                        Modelo::create([
                            'nombre' => 'IP PHONE 7975',
                            'marca_id' => 11
                            ]);

         //****PERIFERICOS*********** */

    }
}
