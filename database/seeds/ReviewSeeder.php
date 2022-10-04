<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'title' => Str::random(15),
            'body' => Str::random(50),
            'star' => rand(0,5),
            'image' => Str::random(20),
        ]);
    }
}
