<?php

use Illuminate\Database\Seeder;
use App\Module;

class sys_modules extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module = new Module();
	    $module->name = 'User Management';
	    $module->icon = 'fa fa-users';
	    $module->path = 'user-management';
	    $module->save();

	    $module = new Module();
	    $module->name = 'Setting';
	    $module->icon = 'fa fa-gears';
	    $module->path = 'setting';
	    $module->save();

	    $module = new Module();
	    $module->name = 'Meeting Room Reservation';
	    $module->icon = 'fa fa-building';
	    $module->path = 'meeting-room-reservation';
	    $module->save();
    }
}
