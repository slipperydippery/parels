<?php

use Illuminate\Database\Seeder;

class MeerinfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meerinfos')->delete();

        $meerinfos = [
            [
                'id' => '1',
                'title' => 'Website loopbaan4daagse', 
                'alt' => 'loopbaan4daagse',
                'adress' => 'http://www.promotion-loopbaan4daagse.nl/',
                'ismail' => '0',
                'pearl_id' => '4'
            ],
            [
                'id' => '2',
                'title' => 'Informatie Sectorplan-VO', 
                'alt' => 'Informatie Sectorplan-VO',
                'adress' => 'http://www.voion.nl/sectorplan',
                'ismail' => '0',
                'pearl_id' => '4'
            ],
            [
                'id' => '3',
                'title' => 'Informatie over loopbaan', 
                'alt' => 'Informatie over loopbaan',
                'adress' => 'http://www.voion.nl/programmalijnen/loopbaan-en-professionalisering/loopbaan/loopbaan',
                'ismail' => '0',
                'pearl_id' => '4'
            ],
            [
                'id' => '4',
                'title' => 'Contact Projectleider', 
                'alt' => 'Marga van der Zanden',
                'adress' => 'mm.vanderzanden@omo.nl',
                'ismail' => '1',
                'pearl_id' => '4'
            ],
            [
                'id' => '5',
                'title' => 'Informatie professionaliseren', 
                'alt' => 'Informatie professionaliseren',
                'adress' => 'http://www.voion.nl/programmalijnen/loopbaan-en-professionalisering',
                'ismail' => '0',
                'pearl_id' => '5'
            ],
            [
                'id' => '6',
                'title' => 'Contact', 
                'alt' => 'Contact',
                'adress' => 'directiesecretariaat@ja.nl',
                'ismail' => '1',
                'pearl_id' => '5'
            ],
            [
                'id' => '7',
                'title' => ' Informatie loopbaan & professionalisering', 
                'alt' => ' Informatie loopbaan & professionalisering',
                'adress' => 'http://www.voion.nl/programmalijnen/loopbaan-en-professionalisering',
                'ismail' => '0',
                'pearl_id' => '6'
            ],
            [
                'id' => '8',
                'title' => ' Contact Voion', 
                'alt' => ' Contact Voion',
                'adress' => ' info@voion.nl',
                'ismail' => '1',
                'pearl_id' => '6'
            ],
            [
                'id' => '9',
                'title' => 'Contact ', 
                'alt' => 'Contact ',
                'adress' => 'info@jobtwinning.nl',
                'ismail' => '1',
                'pearl_id' => '7'
            ],
        ];
        DB::table('meerinfos')->insert($meerinfos);
    }
}
