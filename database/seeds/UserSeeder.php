<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
            'sex' => 1,
            'sns' => Str::random(10).'@gmail.com',
            'image' => Str::random(20),
            'rank' => 1,
            'role' => 2,
        ]);
    }
}
