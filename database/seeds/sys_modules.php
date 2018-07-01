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
        $module = [
            [
	            //'parent_id' 	=> '',
	            'name' 			=> 'User Management', 
	            'description' 	=> 'Admin Panel', 
	            'icon' 			=> 'fa fa-users', 
	            'path' 			=> 'user-management',
	            'sorting'		=> '2',
        	],

            [
            	//'parent_id' 	=> '', 
            	'name' 			=> 'Setting', 
            	'description' 	=> 'Admin Panel', 
            	'icon' 			=> 'fa fa-gears', 
            	'path' 			=> 'setting',
            	'sorting'		=> '3',
            ], 

            [
            	//'parent_id' 	=> '', 
            	'name' 			=> 'Meeting Room Reservation', 
            	'description' 	=> 'Admin Panel', 
            	'icon' 			=> 'fa fa-building', 
            	'path' 			=> 'mrr',
            	'sorting'		=> '1',
            ],
            
        ];
        Module::insert($module);

	    $module_parent_user_management = Module::where('name', 'User Management')->first();
	    $module_parent_setting = Module::where('name', 'Setting')->first();
	    $module_parent_mrr = Module::where('name', 'Meeting Room Reservation')->first();

	    $module = [
            [
	            'parent_id' 	=> $module_parent_user_management->id,
	            'name' 			=> 'Modules', 
	            'description' 	=> 'Admin Panel', 
	            'icon' 			=> 'fa fa-bars', 
	            'path' 			=> 'modules',
	            'sorting'		=> '1',
        	],

            [
	            'parent_id' 	=> $module_parent_user_management->id,
	            'name' 			=> 'Privileges & Roles', 
	            'description' 	=> 'Admin Panel', 
	            'icon' 			=> 'fa fa-bars', 
	            'path' 			=> 'privileges',
	            'sorting'		=> '2',
        	], 

            [
	            'parent_id' 	=> $module_parent_user_management->id,
	            'name' 			=> 'Users', 
	            'description' 	=> 'Admin Panel', 
	            'icon' 			=> 'fa fa-users', 
	            'path' 			=> 'users',
	            'sorting'		=> '3',
        	],

        	[
	            'parent_id' 	=> $module_parent_setting->id,
	            'name' 			=> 'Application', 
	            'description' 	=> 'Admin Panel', 
	            'icon' 			=> 'fa fa-gears', 
	            'path' 			=> 'application',
	            'sorting'		=> '1',
        	],

        	[
	            'parent_id' 	=> $module_parent_setting->id,
	            'name' 			=> 'Email', 
	            'description' 	=> 'Admin Panel', 
	            'icon' 			=> 'fa fa-envelope', 
	            'path' 			=> 'email',
	            'sorting'		=> '2',
        	],

        	[
	            'parent_id' 	=> $module_parent_mrr->id,
	            'name' 			=> 'Company', 
	            'description' 	=> '', 
	            'icon' 			=> 'fa-building', 
	            'path' 			=> 'company',
	            'sorting'		=> '1',
        	],

        	[
	            'parent_id' 	=> $module_parent_mrr->id,
	            'name' 			=> 'Building', 
	            'description' 	=> '', 
	            'icon' 			=> 'fa-building', 
	            'path' 			=> 'building',
	            'sorting'		=> '2',
        	],

        	[
	            'parent_id' 	=> $module_parent_mrr->id,
	            'name' 			=> 'Meeting Room', 
	            'description' 	=> '', 
	            'icon' 			=> 'fa-building', 
	            'path' 			=> 'meeting-room',
	            'sorting'		=> '3',
        	],

        	[
	            'parent_id' 	=> $module_parent_mrr->id,
	            'name' 			=> 'Reservation', 
	            'description' 	=> '', 
	            'icon' 			=> 'fa fa-bars', 
	            'path' 			=> 'reservation',
	            'sorting'		=> '4',
        	],
            
        ];
        Module::insert($module);
    }
}
