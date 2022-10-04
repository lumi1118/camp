<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todoes')->insert([
            'name' => Str::random(10),
            'status' => rand(0,2),
        ]);
    }
}
