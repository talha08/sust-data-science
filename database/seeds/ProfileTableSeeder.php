<?php

use Illuminate\Database\Seeder;

use App\Profile;
class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create(['user_id'=> 1,'platform' => 'Data science','position' => 'Teacher','organization' => 'CSE, SUST, Sylhet']);
        Profile::create(['user_id'=> 2,'platform' => 'Data science','position' => 'Teacher','organization' => 'CSE, SUST, Sylhet']);
        Profile::create(['user_id'=> 3,'platform' => 'Data science','position' => 'Teacher','organization' => 'CSE, SUST, Sylhet']);
        Profile::create(['user_id'=> 4,'platform' => 'Data science','position' => 'Student','organization' => 'CSE, SUST, Sylhet']);
        Profile::create(['user_id'=> 5,'platform' => 'Data science','position' => 'Student','organization' => 'CSE, SUST, Sylhet']);
        Profile::create(['user_id'=> 6,'platform' => 'Data science','position' => 'Student','organization' => 'CSE, SUST, Sylhet']);
        Profile::create(['user_id'=> 7,'platform' => 'Data science','position' => 'Student','organization' => 'CSE, SUST, Sylhet']);
        Profile::create(['user_id'=> 8,'platform' => 'Data science','position' => 'Alumni','organization' => 'CSE, SUST, Sylhet']);
        Profile::create(['user_id'=> 9,'platform' => 'Data science','position' => 'Alumni','organization' => 'CSE, SUST, Sylhet']);
        Profile::create(['user_id'=> 10,'platform' => 'Data science','position' => 'Alumni','organization' => 'CSE, SUST, Sylhet']);

    }
}
