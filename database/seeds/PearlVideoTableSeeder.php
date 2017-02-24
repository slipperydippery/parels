<?php

use Illuminate\Database\Seeder;

class PearlVideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pearl_video')->delete();

        $pearl_video = [
            [
                'pearl_id' => '1',
                'video_id' => '1',
            ],
            [
                'pearl_id' => '2',
                'video_id' => '2',
            ],
            [
                'pearl_id' => '3',
                'video_id' => '3',
            ],'video_id' => '3',
            ],
        ];

        DB::table('pearl_video')->insert($pearl_video);
    }
}
