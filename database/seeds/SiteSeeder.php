<?php

use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            'name' => Str::random(10),
            'body' => Str::random(50),
            'number' => null,
            'url' => Str::random(30),
            'image' => Str::random(30),
        ]);
    }
}
