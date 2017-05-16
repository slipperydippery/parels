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
                'adress' => 'ParelbeschrijvingLoopbaanscans.pdf',
            ],
            [
                'id' => '10',
                'title' => 'Parelbeschrijving', 
                'description' => '',
                'adress' => 'ParelbeschrijvingLoopbaanscans.pdf',
            ],
            [
                'id' => '11',
                'title' => 'Factsheet', 
                'description' => '',
                'adress' => 'FactsheetLoopbaanscan.pdf',
            ],
            [
                'id' => '12',
                'title' => 'Parelbeschrijving', 
                'description' => '',
                'adress' => 'ParelbeschrijvingVeranderlandschap.pdf',
            ],
            [
                'id' => '13',
                'title' => 'Factsheet', 
                'description' => '',
                'adress' => 'FactsheetVeranderlandschap.pdf',
            ],
            [
                'id' => '14',
                'title' => 'Tips & Tricks', 
                'description' => '',
                'adress' => 'TipsAndTricksVeranderlandschap.pdf',
            ],
        ];
        DB::table('pdfs')->insert($pdfs);
    }
}
