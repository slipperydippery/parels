<?php

use Illuminate\Database\Seeder;

class PDFsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pdfs')->delete();

        $pdfs = [
            [
                'id' => '1',
                'title' => 'Parelbeschrijving', 
                'description' => '',
                'adress' => 'ParelbeschrijvingTweedegraadsPLUS.pdf',
            ],
            [
                'id' => '2',
                'title' => 'Factsheet', 
                'description' => '',
                'adress' => 'FactsheetTweedegraadsPLUS.pdf',
            ],
            [
                'id' => '3',
                'title' => 'Tips & Tricks', 
                'description' => '',
                'adress' => 'TipsAndTricksTweedegraadsPLUS.pdf',
            ],
        ];
        DB::table('pdfs')->insert($pdfs);
    }
}
