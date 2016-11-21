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
                'title' => 'Taakbeleid op de schop',
                'description' => '',
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
                'title' => 'Four',
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
