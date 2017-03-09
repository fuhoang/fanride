<?php

use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leagues')->insert(array(
        	array('sport_id' => 1, 'league' => 'Premier League'),
        	array('sport_id' => 1, 'league' => 'Championship'),

        ));
    }
}
