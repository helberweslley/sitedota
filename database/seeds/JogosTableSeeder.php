<?php

use Illuminate\Database\Seeder;

class JogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'name' => 'Dota'
        ]);

        DB::table('games')->insert([
            'name' => 'Underlords'
        ]);
    }
}
