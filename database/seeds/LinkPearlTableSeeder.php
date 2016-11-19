<?php

use Illuminate\Database\Seeder;

class LinkPearlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('link_pearl')->delete();

        $link_pearl = [
            [
                'link_id' => '1',
                'pearl_id' => '2',
            ],
            [
                'link_id' => '2',
                'pearl_id' => '1',
            ],
            [
                'link_id' => '1',
                'pearl_id' => '3',
            ],
            [
                'link_id' => '3',
                'pearl_id' => '1',
            ],
        ];

        DB::table('link_pearl')->insert($link_pearl);
    }
}
