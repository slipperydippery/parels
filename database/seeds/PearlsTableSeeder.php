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
                'title' => 'loopbaanscans',
                'description' => '
<p>De vereniging Ons Middelbaar Onderwijs besloot om loopbaanscans af te nemen bij bij haar medewerkers om ziekteverzuim te voorkomen en om te helpen met doorstroom naar een andere baan. Met subsidie via het sectorplan, goede voorbereiding is het zover. De medewerkers krijgen de kans om zich in te schrijven. Maar er blijkt bijna geen animo en er zijn maar 10 inschrijvingen. De vereniging ontwikkeld een nieuw plan met een verbluffend resultaat.</p>

<p>Wil je weten hoe Vereniging Ons Middelbaar Onderwijs dat gedaan heeft? In de parelbeschrijving lees je het hele verhaal. De factsheet laat je beknopt de feiten zien. En de infographic met een stappenplan helpt je bij het implementeren van je eigen loopbaanscans.</p>',
            ],
            [
                'id' => '2',
                'title' => 'Professionalisering in het onderwijs',
                'description' => '',
            ],
            [
                'id' => '3',
                'title' => 'Veilig werken in praktijklokalen',
                'description' => '',
            ],
            [
                'id' => '4',
                'title' => 'Taakbeleid op de schop',
                'description' => '',
            ],
            [
                'id' => '5',
                'title' => 'Five',
                'description' => '',
            ],
            [
                'id' => '6',
                'title' => 'Six',
                'description' => '',
            ],
        ];

        DB::table('pearls')->insert($pearls);
    }
}
