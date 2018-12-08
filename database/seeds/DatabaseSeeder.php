<?php

/*
 *
 * TODO php artisan migrate:fresh --seed +++ composer dump-autoload
 *
*/

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            CamperTableSeeder::class,
            SpecificationTableSeeder::class,
        ]);
    }
}
