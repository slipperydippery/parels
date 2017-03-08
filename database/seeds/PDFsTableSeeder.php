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
            [
                'id' => '4',
                'title' => 'Parelbeschrijving', 
                'description' => '',
                'adress' => 'ParelbeschrijvingSlimmerWerkenTV.pdf',
            ],
            [
                'id' => '5',
                'title' => 'Factsheet', 
                'description' => '',
                'adress' => 'FactsheetSlimmerWerkenTV.pdf',
            ],
            [
                'id' => '6',
                'title' => 'Tips & Tricks', 
                'description' => '',
                'adress' => 'TipsAndTricksSlimmerWerkenTV.pdf',
            ],
            [
                'id' => '7',
                'title' => 'Parelbeschrijving', 
                'description' => '',
                'adress' => 'ParelbeschrijvingBanenafspraak.pdf',
            ],
            [
                'id' => '8',
                'title' => 'Factsheet', 
                'description' => '',
                'adress' => 'FactsheetBanenafspraak.pdf',
            ],
            [
                'id' => '9',
                'title' => 'Tips & Tricks', 
                'description' => '',
                'adress' => 'TipsAndTricksBanenafspraak.pdf',
            ],
        ];
        DB::table('pdfs')->insert($pdfs);
    }
}
