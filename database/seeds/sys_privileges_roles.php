<?php

use Illuminate\Database\Seeder;
use App\Module;
use App\Privilege;
use App\PrivilegeRole;

class sys_privileges_roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $privilege = Privilege::all();        
        foreach ($privilege as $pvlg) {

        	$module = Module::all();
        	foreach ($module as $mdl) {
				PrivilegeRole::insert([
					'id_sys_privileges'	=> $pvlg->id, 
					'id_sys_modules'	=> $mdl->id,
					'is_visible'		=> true,
					//'is_read'			=> true,
					'is_create'			=> true,
					'is_edit'			=> true,
					'is_delete'			=> true,
					'is_print'			=> true,
					'is_export'			=> true,
				]);
			}
		}
    }
}
