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
                <p><b>Tweedegraads PLUS: Doorscholing van tweedegraads docenten</b></p>
                <p>De Rode Loper, een samenwerkingsverband van 41 scholen in de regio Den Haag, wil tweedegraads docenten stimuleren een eerstegraads bevoegdheid te halen. Zij ontwikkelde samen met de Hogeschool Utrecht Tweedegraads PLUS modules op masterniveau over uiteenlopende onderwerpen. </p>
                <p> Nieuwsgierig naar het hoe en waarom? Bekijk de animatie of lees een van de documenten hieronder voor de details van dit verhaal.</p>',
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
        ];

        DB::table('pearls')->insert($pearls);
    }
}
