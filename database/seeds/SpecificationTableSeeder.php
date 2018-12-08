<?php

use Illuminate\Database\Seeder;

class SpecificationTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specifications')->insert([
            'camperId' => 1,
            'name' => 'VOLKSWAGEN TRANSPORTER T4 1997',
        ]);
        DB::table('specifications')->insert([
            'camperId' => 1,
            'name' => '2400 cc, 55 kW',
        ]);
        DB::table('specifications')->insert([
            'camperId' => 1,
            'name' => 'diesel',
        ]);
        DB::table('specifications')->insert([
            'camperId' => 2,
            'name' => 'Peugeot Bipper 2013',
        ]);
        DB::table('specifications')->insert([
            'camperId' => 2,
            'name' => '1300cc HDI, 55kw',
        ]);
        DB::table('specifications')->insert([
            'camperId' => 2,
            'name' => 'diesel',
        ]);
    }
}
