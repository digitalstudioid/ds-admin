<?php

use Illuminate\Database\Seeder;
use App\Building;
use App\MeetingRoom;

class mrr_meeting_room extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$mrr_building = Building::where('name', 'Admin Building')->first();
        
        $mr = new MeetingRoom();
	    $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'A. 101';
        $mr->name = 'Meeting Room A. 101';
        $mr->name = '25';
	    $mr->save();       

        $mrr_building = Building::where('name', 'Business Building')->first();
        
        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'B. 101';
        $mr->name = 'Meeting Room B. 101';
        $mr->name = '30';
        $mr->save();

        $mrr_building = Building::where('name', 'Control Building')->first();
        
        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'C. 101';
        $mr->name = 'Meeting Room C. 101';
        $mr->name = '35';
        $mr->save();*/

        $mrr_building_admin     = Building::where('name', 'Admin Building')->first();
        $mrr_building_business  = Building::where('name', 'Business Building')->first();
        $mrr_building_control   = Building::where('name', 'Control Building')->first();

        $mrr = [
            ['id_mrr_building' => $mrr_building_admin->id, 'name' => 'A. 101', 'description' => 'Meeting Room A. 101', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_admin->id, 'name' => 'A. 102', 'description' => 'Meeting Room A. 102', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_admin->id, 'name' => 'A. 201', 'description' => 'Meeting Room A. 201', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_admin->id, 'name' => 'A. 202', 'description' => 'Meeting Room A. 202', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_admin->id, 'name' => 'A. 203', 'description' => 'Meeting Room A. 203', 'capacity' => '25'],

            ['id_mrr_building' => $mrr_building_business->id, 'name' => 'B. 101', 'description' => 'Meeting Room B. 101', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_business->id, 'name' => 'B. 102', 'description' => 'Meeting Room B. 102', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_business->id, 'name' => 'B. 201', 'description' => 'Meeting Room B. 201', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_business->id, 'name' => 'B. 202', 'description' => 'Meeting Room B. 202', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_business->id, 'name' => 'B. 301', 'description' => 'Meeting Room B. 301', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_business->id, 'name' => 'B. 302', 'description' => 'Meeting Room B. 302', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_business->id, 'name' => 'B. 303', 'description' => 'Meeting Room B. 303', 'capacity' => '25'],

            ['id_mrr_building' => $mrr_building_control->id, 'name' => 'C. 101', 'description' => 'Meeting Room C. 101', 'capacity' => '25'],
            ['id_mrr_building' => $mrr_building_control->id, 'name' => 'C. 201', 'description' => 'Meeting Room C. 201', 'capacity' => '25'],
        ];
        MeetingRoom::insert($mrr);

    }
}
