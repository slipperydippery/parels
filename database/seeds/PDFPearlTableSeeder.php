<?php

use Illuminate\Database\Seeder;

class PDFPearlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pdf_pearl')->delete();

        $pdf_pearl = [
            [
                'pdf_id' => '1',
                'pearl_id' => '1',
            ],
            [
                'pdf_id' => '2',
                'pearl_id' => '1',
            ],
            [
                'pdf_id' => '3',
                'pearl_id' => '1',
            ],
            [
                'pdf_id' => '4',
                'pearl_id' => '2',
            ],
            [
                'pdf_id' => '5',
                'pearl_id' => '2',
            ],
            [
                'pdf_id' => '6',
                'pearl_id' => '2',
            ],
            [
                'pdf_id' => '7',
                'pearl_id' => '3',
            ],
            [
                'pdf_id' => '8',
                'pearl_id' => '3',
            ],
            [
                'pdf_id' => '9',
                'pearl_id' => '3',
            ],
            [
                'pdf_id' => '10',
                'pearl_id' => '4',
            ],
            [
                'pdf_id' => '11',
                'pearl_id' => '4',
            ],
            [
                'pdf_id' => '12',
                'pearl_id' => '5',
            ],
            [
                'pdf_id' => '13',
                'pearl_id' => '5',
            ],
            [
                'pdf_id' => '14',
                'pearl_id' => '5',
            ],
            [
                'pdf_id' => '15',
                'pearl_id' => '6',
            ],
            [
                'pdf_id' => '16',
                'pearl_id' => '6',
            ],
            // [
            //     'pdf_id' => '17',
            //     'pearl_id' => '7',
            // ],
            // [
            //     'pdf_id' => '18',
            //     'pearl_id' => '7',
            // ],
            // [
            //     'pdf_id' => '19',
            //     'pearl_id' => '7',
            // ],
        ];

        DB::table('pdf_pearl')->insert($pdf_pearl);
    }
}
