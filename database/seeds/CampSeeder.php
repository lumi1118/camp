<?php

use Illuminate\Database\Seeder;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'sex' => null,
            'sns' => 'instagram.com/'.Str::random(10),
            'image' => Str::random(20),
            'rank' => 4,
            'role' => 3,
        ]);
    }
}
