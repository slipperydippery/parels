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
                'title' => 'Tweede&shy;graads PLUS',
                'subtitle' => 'Doorscholing van tweedegraads docenten',
                'description' => '
                <p>De Rode Loper, een samenwerkingsverband van 41 scholen in de regio Den Haag, wil tweedegraads docenten stimuleren een eerstegraads bevoegdheid te halen. Zij ontwikkelde samen met de Hogeschool Utrecht Tweedegraads PLUS modules op masterniveau over uiteenlopende onderwerpen. </p>
                <p> Nieuwsgierig naar het hoe en waarom? Bekijk de animatie of lees een van de documenten hieronder voor de details van dit verhaal.</p>',
            ],
            [
                'id' => '2',
                'title' => 'Slimmer Werken TV',
                'subtitle' => 'Vernieuwende films om leraren aan het vak te binden',
                'description' => '
                <p>Het platform Noord-Holland-Noord  (Platform NHN) zocht naar een nieuwe manier om docenten aan het vak te binden. Daarom ontwikkelde het platform Slimmer Werken TV; een serie van 14 documentaires voor docenten. De films worden bij voorkeur in teamverband bekeken aan de hand van een speciaal ontwikkelde kijkmethode. Het doel is om docenten de kennis uit de films te kunnen laten toepassen in hun dagelijkse lespraktijk. De films zijn beschikbaar voor elke docent en school.</p>
                <p>Wilt u weten hoe en waarom u Slimmer Werken TV kunt inzetten in uw organisatie? Bekijk de animatie of lees een van de documenten hieronder. </p> ',
            ],
            [
                'id' => '3',
                'title' => 'Banen&shy;afspraak',
                'subtitle' => '30 schoonmakers uit de SW gedetacheerd bij de Gooise Scholenfederatie',
                'description' => '
                <p>De Gooise Scholen Federatie (GSF) bestaat uit 8 samenwerkende scholen in de Gooi en Vechtstreek. Vier jaar geleden zochten zij een betere oplossing voor de schoonmaakwerkzaamheden van alle scholen. Zij kozen ervoor om 30 schoonmakers in dienst te nemen via het sociaal werkbedrijf. Dat levert een verrassend resultaat. Deze parel inspireert om banen te creëren voor mensen met een arbeidsbeperking. Benieuwd naar het verhaal van GSF? Bekijk de animatie of lees een van de documenten op deze pagina voor de details.</p> ',
            ],
        ];

        DB::table('pearls')->insert($pearls);
    }
}
