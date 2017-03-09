<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(array(
        	array('league_id' => 1, 'team' => 'Arsenal'),
        	array('league_id' => 1, 'team' => 'Bournemouth'),
        	array('league_id' => 1, 'team' => 'Burnley'),
        	array('league_id' => 1, 'team' => 'Chelsea'),
        	array('league_id' => 1, 'team' => 'Crystal Palace'),
        	array('league_id' => 1, 'team' => 'Everton'),
        	array('league_id' => 1, 'team' => 'Hull City'),
        	array('league_id' => 1, 'team' => 'Leicester City'),
        	array('league_id' => 1, 'team' => 'Liverpool'),
        	array('league_id' => 1, 'team' => 'Manchester City'),
        	array('league_id' => 1, 'team' => 'Manchester United'),
        	array('league_id' => 1, 'team' => 'Middlesbrough'),
        	array('league_id' => 1, 'team' => 'Southampton'),
        	array('league_id' => 1, 'team' => 'Stoke City'),
        	array('league_id' => 1, 'team' => 'Sunderland'),
        	array('league_id' => 1, 'team' => 'Swansea City'),
        	array('league_id' => 1, 'team' => 'Tottenham Hotspur'),
        	array('league_id' => 1, 'team' => 'Watford'),
        	array('league_id' => 1, 'team' => 'West Bromwich Albion'),
        	array('league_id' => 1, 'team' => 'West Ham United'),
        	array('league_id' => 2, 'team' => 'Aston Villa'),
        	array('league_id' => 2, 'team' => 'Barnsley'),
        	array('league_id' => 2, 'team' => 'Birmingham City'),
        	array('league_id' => 2, 'team' => 'Blackburn Rovers'),
        	array('league_id' => 2, 'team' => 'Brentford'),

        ));
    }
}
