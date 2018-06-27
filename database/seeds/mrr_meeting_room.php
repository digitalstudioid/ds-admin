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
        $mrr_building = Building::where('name', 'Admin Building')->first();
        
        $mr = new MeetingRoom();
	    $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'A. 101';
	    $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'A. 102';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'A. 201';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'A. 202';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'A. 203';
        $mr->save();

        $mrr_building = Building::where('name', 'Business Building')->first();
        
        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'B. 101';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'B. 102';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'B. 201';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'B. 202';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'B. 203';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'B. 301';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'B. 302';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'B. 303';
        $mr->save();

        $mrr_building = Building::where('name', 'Control Building')->first();
        
        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'C. 101';
        $mr->save();

        $mr = new MeetingRoom();
        $mr->id_mrr_building = $mrr_building->id;
        $mr->name = 'C. 201';
        $mr->save();

    }
}
