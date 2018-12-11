<?php

use Illuminate\Database\Seeder;

class SpecificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('specifications')->delete();
        
        \DB::table('specifications')->insert(array (
            0 => 
            array (
                'camper_id' => 1,
                'name' => 'VOLKSWAGEN TRANSPORTER T4 1997',
            ),
            1 => 
            array (
                'camper_id' => 1,
                'name' => '2400 cc, 55 kW',
            ),
            2 => 
            array (
                'camper_id' => 1,
                'name' => 'diesel',
            ),
            3 => 
            array (
                'camper_id' => 2,
                'name' => 'Peugeot Bipper 2013',
            ),
            4 => 
            array (
                'camper_id' => 2,
                'name' => '1300cc HDI, 55kw',
            ),
            5 => 
            array (
                'camper_id' => 2,
                'name' => 'diesel',
            ),
        ));
        
        
    }
}