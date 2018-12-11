<?php

use Illuminate\Database\Seeder;

class CampersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('campers')->delete();
        
        \DB::table('campers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'The VW T4 is one of the most reliable van models. With our cozy camper conversion feel like you’re at home everywhere!',
                'name' => 'Cielito Lindo',
                'sleeps' => 2,
                'thumbnail' => 'T4 Booking thumbnail.jpg',
                'travels' => 3,
            ),
            1 => 
            array (
                'id' => 2,
                'description' => 'The smallest mini campervan! Low on fuel, small dimension but with all the comfort for your next adventure.',
                'name' => 'Bipper',
                'sleeps' => 2,
                'thumbnail' => 'Bipper Booking thumbnail.jpg',
                'travels' => 2,
            ),
        ));
        
        
    }
}