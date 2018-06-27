<?php

use Illuminate\Database\Seeder;
use App\Building;

class mrr_building extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Method 1 Eloquent (created_at & updated_at automatic fill by eloquent)
        $building = new Building();
	    $building->name = 'Admin Building';
	    $building->save();
        
	    //Method 2 Query Builder (created_at null but set with current condition & updated_at is null)
	    $building = [			
			['name' => 'Business Building']
		];
		DB::table('mrr_building')->insert($building);

		//Method 3 Query Builder (created_at null but set with current condition & updated_at is null)
		DB::table('mrr_building')->insert([
            'name' => 'Control Building',
        ]);
    }
}
