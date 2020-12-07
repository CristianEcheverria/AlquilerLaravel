<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatuseTableSeeder::class);
        $this->call(UserMovieTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(RentalTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
