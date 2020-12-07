<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Faker\Factory as Faker;

class MoviesTableSeeder extends Seeder
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
        	$movie = new Movie;
        	$movie->name = $faker->name; 
        	$movie->description = $faker->text;
        	$movie->user_id =$faker->numberBetween(2, 12);
        	$movie->status_id= 1;
        	$movie->save();
        }
    }
}
