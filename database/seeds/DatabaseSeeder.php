<?php

/*
 *
 * TODO Seeding
 * CLI: composer dump-autoload
 *      php artisan migrate:fresh --seed
 * TODO Reverse Seeding
 * https://github.com/orangehill/iseed
 * CLI: php artisan iseed campers,images,extras,includeds,specifications --force --exclude=id,created_at,updated_at
 *
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
        $this->call(ImagesTableSeeder::class);
        $this->call(ExtrasTableSeeder::class);
        $this->call(IncludedsTableSeeder::class);
        $this->call(CampersTableSeeder::class);
        $this->call(SpecificationsTableSeeder::class);
    }
}
