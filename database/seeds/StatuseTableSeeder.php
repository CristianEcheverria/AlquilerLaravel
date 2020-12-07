<?php

use Illuminate\Database\Seeder;
use App\Models\Statuse;

class StatuseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = array(
        			['name' => 'Activo'],
        			['name' => 'Inactivo'],
         		);

        foreach ($statuses as $value) {
        	$statuse = new Statuse;
        	$statuse->name = $value['name'];
        	$statuse->type_status_id = 1;
        	$statuse->save();
        }
    }
}
