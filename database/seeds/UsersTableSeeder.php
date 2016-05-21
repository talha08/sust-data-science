<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Talha','email' => 'talhaqc@gmail.com','password' => bcrypt('a'),'status'=> true,'is_teacher'=>1]);

        //creating 10 test users
        // factory(User::class,10)->create();

    }
}
