<?php

use Illuminate\Database\Seeder;
use App\Models\Categorie;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
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
        	$category = new Categorie;
        	$category->name = $faker->name; 
        	$category->status_id = 1;
        	$category->save();
        }
    }
}
