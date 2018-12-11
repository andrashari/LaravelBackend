<?php

use Illuminate\Database\Seeder;

class IncludedsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('includeds')->delete();
        
        \DB::table('includeds')->insert(array (
            0 => 
            array (
                'camper_id' => 1,
                'name' => '15L water tank & sink',
            ),
            1 => 
            array (
                'camper_id' => 1,
            'name' => 'Compressor Fridge 38L (12v/220V)',
            ),
            2 => 
            array (
                'camper_id' => 1,
                'name' => 'GAS COOKER with 1 catridge',
            ),
            3 => 
            array (
                'camper_id' => 1,
                'name' => 'kitchen equipment',
            ),
            4 => 
            array (
                'camper_id' => 1,
                'name' => 'pillow, duvet & bedsheet',
            ),
            5 => 
            array (
                'camper_id' => 1,
                'name' => '220V camping cable 20m',
            ),
            6 => 
            array (
                'camper_id' => 1,
                'name' => 'table and chairs',
            ),
            7 => 
            array (
                'camper_id' => 2,
                'name' => '25L water tank & sink',
            ),
            8 => 
            array (
                'camper_id' => 2,
            'name' => 'Compressor Fridge 38L (22v/220V)',
            ),
            9 => 
            array (
                'camper_id' => 2,
                'name' => 'GAS COOKER with 2 catridge',
            ),
            10 => 
            array (
                'camper_id' => 2,
                'name' => 'kitchen equipment',
            ),
            11 => 
            array (
                'camper_id' => 2,
                'name' => 'pillow, duvet & bedsheet',
            ),
            12 => 
            array (
                'camper_id' => 2,
                'name' => 'Roof top tent',
            ),
            13 => 
            array (
                'camper_id' => 2,
                'name' => '220V camping cable 20m',
            ),
            14 => 
            array (
                'camper_id' => 2,
                'name' => 'table and chairs',
            ),
        ));
        
        
    }
}