<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use Faker\Factory as Faker;

class RoleTableSeeder extends Seeder
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
        	$role = new Role;
        	$role->name = $faker->name; 
        	$role->status_id = 1;
        	$role->save();
        }
    }
}
