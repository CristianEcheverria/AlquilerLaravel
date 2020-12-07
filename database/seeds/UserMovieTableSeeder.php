<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\UserMovie;
use Illuminate\Support\Facades\Hash;

class UserMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) { 
        	$user = new UserMovie;
        	$user->name = $faker->name; 
        	$user->email = $faker->email; 
        	$user->password = Hash::make('test123');
        	$user->status_id = 1;
        	$user->role_id= 2;
        	$user->save();
        }
    }
}
