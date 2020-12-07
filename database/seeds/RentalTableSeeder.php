<?php

use Illuminate\Database\Seeder;
use App\Models\Rental;
use Faker\Factory as Faker;

class RentalTableSeeder extends Seeder
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
        	$rental = new Rental;
        	$rental->start_date = $faker->dateTime();
        	$rental->end_date = $faker->dateTime();
        	$rental->total =$faker->numberBetween(1000, 20000);
        	$rental->user_id =$faker->numberBetween(2, 12);
        	$rental->status_id= 1;
        	$rental->save();
        }
    }
}
