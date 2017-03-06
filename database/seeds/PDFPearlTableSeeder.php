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
        ];

        DB::table('pdf_pearl')->insert($pdf_pearl);
    }
}
