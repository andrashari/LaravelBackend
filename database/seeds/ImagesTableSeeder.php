<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'camper_id' => 1,
                'folder' => 'Cielito Lindo',
                'type' => 'homepage',
                'url' => '',
            ),
            1 => 
            array (
                'camper_id' => 1,
                'folder' => 'Cielito Lindo',
                'type' => 'camperpage',
                'url' => '',
            ),
            2 => 
            array (
                'camper_id' => 1,
                'folder' => 'Cielito Lindo',
                'type' => 'mosaic',
                'url' => '',
            ),
            3 => 
            array (
                'camper_id' => 2,
                'folder' => 'Bipper',
                'type' => 'homepage',
                'url' => '',
            ),
            4 => 
            array (
                'camper_id' => 2,
                'folder' => 'Bipper',
                'type' => 'camperpage',
                'url' => '',
            ),
            5 => 
            array (
                'camper_id' => 2,
                'folder' => 'Bipper',
                'type' => 'mosaic',
                'url' => '',
            ),
        ));
        
        
    }
}