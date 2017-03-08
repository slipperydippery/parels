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
                'description' => '
                <p><b>Slimmer Werken TV: 30 schoonmakers uit de SW gedetacheerd bij de Gooise Scholenfederatie</b></p>
                <p>In 2013 is in het sociaal akkoord afgesproken dat de vo-sector 2026 mensen met een arbeidsbeperking in dienst zal nemen. De Gooise Scholenfederatie koos ervoor om 30 schoonmakers te detacheren via de sociale werkvoorziening. De ervaring die GSF heeft opgedaan geeft u inzicht in de manier waarop het mogelijk is om ook mensen met een afstand tot de arbeidsmarkt in dienst te nemen. </p>
                <p>Bekijk de animatie of lees een van de documenten hieronder voor de details van dit verhaal.</p>

                ',
            ],
            [
                'id' => '3',
                'title' => 'Banenafspraak',
                'description' => '
                <p><b>Banenafspraak: 30 schoonmakers uit de SW gedetacheerd bij de Gooise Scholenfederatie</b></p>
                <p>In 2013 is in het sociaal akkoord afgesproken dat de vo-sector 2026 mensen met een arbeidsbeperking in dienst zal nemen voor 2016. De Gooise Scholenfederatie koos ervoor om 30 schoonmakers te detacheren via de sociale werkvoorziening. De ervaring die GSF heeft opgedaan geeft u inzicht in de manier waarop het mogelijk is om ook mensen met een afstand tot de arbeidsmarkt in dienst te nemen.</p>
                <p>Bekijk de animatie of lees een van de documenten hieronder voor de details van dit verhaal. </p>

                ',
            ],
        ];

        DB::table('pearls')->insert($pearls);
    }
}
