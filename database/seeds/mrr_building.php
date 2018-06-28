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
        /*
        $building = new Building();
	    $building->name = 'Admin Building';
        $building->save();
        */
        
	    //Method 2 Query Builder (created_at null but set with current condition & updated_at is null)
        /*
        DB::table('mrr_building')->insert([
            'name' => 'Control Building',
        ]);
        */

        //Method 3 Query Builder (created_at null but set with current condition & updated_at is null)
	    /*
        $building = [			
			['name' => 'Business Building']
		];
		DB::table('mrr_building')->insert($building);
        */		

        //Method 4 Query Builder (created_at null but set with current condition & updated_at is null)
        /*
        $building_1 = ['name' => 'Business Building'];
        $building_2 = ['name' => 'Control Building'];
        Building::insert([$building_1, $building_2]);
        */

        //Method 5 Query Builder (created_at null but set with current condition & updated_at is null)
        $building = [
            ['name' => 'Admin Building'],
            ['name' => 'Business Building'], 
            ['name' => 'Control Building'],
        ];
        Building::insert($building);
    }
}
