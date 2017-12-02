<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 29) ->create();

        App\User::create([
        	'name' 		=> 'Freddy Vilches',
        	'email' 	=> 'yiyehtv@gmail.com',
        	'password' 	=> bcrypt('123'),
        	'points' 	=> 300,
        	'type' 		=> 'admin',
        	'remember_token' => str_random(10)	
        ]);
    }
}
