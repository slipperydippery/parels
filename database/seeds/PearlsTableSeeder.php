<?php

use Illuminate\Database\Seeder;

class PearlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pearls')->delete();

        $pearls = [
            [
                'id' => '1',
                'title' => 'Tweedegraads PLUS',
                'description' => '
                <p><b>Tweedegraads PLUS: professionaliseren met laagdrempelige modules</b></p>
<p>Deze parel presenteert het inspirerende verhaal van de Rode Loper om tweedegraads docenten via laagdrempelige modules te professionaliseren. De Rode Loper is een samenwerkingsverband van 41 scholen in Den Haag, Rijswijk en Leidschendam-Voorburg. Omdat veel tweedegraads docenten in deze regio in de onderbouw onvoldoende zicht hebben op de eisen die er in de bovenbouw worden gesteld heeft de Rode Loper Tweedegraads PLUS modules ontwikkeld op masterniveau. Klik voor een impressie op de animatie of op een van de documenten hieronder voor de details over dit verhaal. </p>',
            ],
            [
                'id' => '2',
                'title' => 'Slimmer Werken TV',
                'description' => '',
            ],
            [
                'id' => '3',
                'title' => 'Banenafspraak',
                'description' => '',
            ],
            [
                'id' => '4',
                'title' => '---',
                'description' => '',
            ],
            [
                'id' => '5',
                'title' => '---',
                'description' => '',
            ],
            [
                'id' => '6',
                'title' => '---',
                'description' => '',
            ],
        ];

        DB::table('pearls')->insert($pearls);
    }
}
