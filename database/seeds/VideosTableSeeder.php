<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->delete();

        $videos = [
            [
                'id' => '1',
                'title' => 'Arbeidsmarkt & mobiliteit', 
                'description' => '',
                'adress' => 'XXdfvsQHcTU',
            ],
            [
                'id' => '2',
                'title' => 'Opleiding & professionalisering', 
                'description' => '',
                'adress' => 'a9pIS8oiIqk',
            ],
            [
                'id' => '3',
                'title' => 'Veilig, gezond & vitaal werken', 
                'description' => '',
                'adress' => 'XXdfvsQHcTU',
            ],
        ];
        DB::table('videos')->insert($videos);
    }
}




