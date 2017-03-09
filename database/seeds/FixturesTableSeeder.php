<?php

use Illuminate\Database\Seeder;

class FixturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fixtures')->insert(array(
        	array('team_id' => 1, 
        		  'fixture' => 'Manchester United vs Arsenal', 
        		  'stadium' => 'Old Trafford',
        		  'kick_off_time' => '19:45:00', 
        		  'date_of_match' => '2016-05-01'),
        	array('team_id' => 1, 
        		  'fixture' => 'Liverpool vs Arsenal', 
        		  'stadium' => 'Anfield',
        		  'kick_off_time' => '19:45:00', 
        		  'date_of_match' => '2016-05-02'),
        	array('team_id' => 1, 
        		  'fixture' => 'West Ham United vs Arsenal', 
        		  'stadium' => 'London Stadium',
        		  'kick_off_time' => '15:00:00', 
        		  'date_of_match' => '2016-05-03'),
        	array('team_id' => 1, 
        		  'fixture' => 'Arsenal vs Tottenham', 
        		  'stadium' => 'White Hart Lane',
        		  'kick_off_time' => '12:45:00', 
        		  'date_of_match' => '2016-05-04'),
        	array('team_id' => 1, 
        		  'fixture' => 'Chelsea vs Arsenal', 
        		  'stadium' => 'Stamford Bridge',
        		  'kick_off_time' => '19:45:00', 
        		  'date_of_match' => '2016-05-05'),
        	array('team_id' => 2, 
        		  'fixture' => 'Chelsea vs Bournmouth', 
        		  'stadium' => 'Stamford Bridge',
        		  'kick_off_time' => '15:00:00', 
        		  'date_of_match' => '2016-05-06'),

        ));
    }
}
