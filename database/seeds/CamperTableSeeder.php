<?php

use Illuminate\Database\Seeder;

class CamperTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campers')->insert([
            'name' => 'Cielito Lindo',
            'thumbnail' => 'T4 Booking thumbnail.jpg',
            'description' =>'The VW T4 is one of the most reliable van models. With our cozy camper conversion feel like you’re at home everywhere!',
            'travels' =>3,
            'sleeps' =>2,
        ]);
        DB::table('campers')->insert([
            'name' => 'Bipper',
            'thumbnail' => 'Bipper Booking thumbnail.jpg',
            'description' =>'The smallest mini campervan! Low on fuel, small dimension but with all the comfort for your next adventure.',
            'travels' =>2,
            'sleeps' =>2,
        ]);
    }
}
