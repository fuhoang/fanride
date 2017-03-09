<?php

use Illuminate\Database\Seeder;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sports')->insert(array(
        	array('sport' => 'Football'),
        	array('sport' => 'Ruby'),
        	array('sport' => 'Tennis'),
        	array('sport' => 'Cricket'),
        	array('sport' => 'Formula 1'),
        	array('sport' => 'Golf'),
        	array('sport' => 'Athletics'),
        ));
    }
}
