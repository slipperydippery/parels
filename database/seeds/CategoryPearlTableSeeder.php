<?php

use Illuminate\Database\Seeder;

class CategoryPearlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_pearl')->delete();

        $category_pearl = [
            [
                'category_id' => '1',
                'pearl_id' => '1',
            ],
            [
                'category_id' => '2',
                'pearl_id' => '1',
            ],
            [
                'category_id' => '2',
                'pearl_id' => '2',
            ],
            [
                'category_id' => '1',
                'pearl_id' => '3',
            ],
            [
                'category_id' => '1',
                'pearl_id' => '4',
            ],
            [
                'category_id' => '2',
                'pearl_id' => '4',
            ],
            [
                'category_id' => '3',
                'pearl_id' => '4',
            ],
            [
                'category_id' => '2',
                'pearl_id' => '5',
            ],
            [
                'category_id' => '1',
                'pearl_id' => '6',
            ],
            [
                'category_id' => '2',
                'pearl_id' => '6',
            ],
            [
                'category_id' => '1',
                'pearl_id' => '7',
            ],
            [
                'category_id' => '2',
                'pearl_id' => '7',
            ],
            [
                'category_id' => '2',
                'pearl_id' => '8',
            ],
        ];

        DB::table('category_pearl')->insert($category_pearl);
    }
}
