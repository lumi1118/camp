<?php

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
        //$this->call(CampSeeder::class);
        $this->call([
        //UserSeeder::class,
        MarkSeeder::class,
        ReviewSeeder::class,
        SiteSeeder::class,
        TagSeeder::class,
        TodoSeeder::class,
    ]);
    }
}
