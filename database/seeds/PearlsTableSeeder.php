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
                'title' => 'One',
                'description' => '',
            ],
            [
                'id' => '2',
                'title' => 'Two',
                'description' => '',
            ],
            [
                'id' => '3',
                'title' => 'Three',
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
