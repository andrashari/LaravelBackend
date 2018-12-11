<?php

use Illuminate\Database\Seeder;

class ExtrasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('extras')->delete();
        
        \DB::table('extras')->insert(array (
            0 => 
            array (
                'camper_id' => 1,
                'name' => 'headlamp',
            ),
            1 => 
            array (
                'camper_id' => 1,
                'name' => 'tent',
            ),
            2 => 
            array (
                'camper_id' => 1,
                'name' => 'hammock',
            ),
            3 => 
            array (
                'camper_id' => 1,
                'name' => 'sleeping bag',
            ),
            4 => 
            array (
                'camper_id' => 1,
                'name' => 'towel',
            ),
            5 => 
            array (
                'camper_id' => 1,
                'name' => 'electric heater',
            ),
            6 => 
            array (
                'camper_id' => 1,
                'name' => 'barbecue',
            ),
            7 => 
            array (
                'camper_id' => 1,
                'name' => 'gas cartridge',
            ),
            8 => 
            array (
                'camper_id' => 1,
                'name' => 'child seat',
            ),
            9 => 
            array (
                'camper_id' => 1,
                'name' => 'highway pass Hungary',
            ),
            10 => 
            array (
                'camper_id' => 1,
                'name' => 'bicycle',
            ),
            11 => 
            array (
                'camper_id' => 1,
                'name' => 'solar shower',
            ),
            12 => 
            array (
                'camper_id' => 1,
                'name' => 'camping plug adapter',
            ),
            13 => 
            array (
                'camper_id' => 2,
                'name' => 'headlamp',
            ),
            14 => 
            array (
                'camper_id' => 2,
                'name' => 'hammock',
            ),
            15 => 
            array (
                'camper_id' => 2,
                'name' => 'sleeping bag',
            ),
            16 => 
            array (
                'camper_id' => 2,
                'name' => 'towel',
            ),
            17 => 
            array (
                'camper_id' => 2,
                'name' => 'barbecue',
            ),
            18 => 
            array (
                'camper_id' => 2,
                'name' => 'gas cartridge',
            ),
            19 => 
            array (
                'camper_id' => 2,
                'name' => 'child seat',
            ),
            20 => 
            array (
                'camper_id' => 2,
                'name' => 'highway pass Hungary',
            ),
            21 => 
            array (
                'camper_id' => 2,
                'name' => 'folding bicycle',
            ),
            22 => 
            array (
                'camper_id' => 2,
                'name' => 'solar shower',
            ),
            23 => 
            array (
                'camper_id' => 2,
                'name' => 'camping plug adapter',
            ),
        ));
        
        
    }
}