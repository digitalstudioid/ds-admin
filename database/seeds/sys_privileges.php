<?php

use Illuminate\Database\Seeder;
use App\Privilege;

class sys_privileges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $privilege = [
            [
                'name'          => 'Super Admin',
                'theme_color'   => 'skin-red',
                'is_superadmin' => true,
                'is_default'    => false,
            ],

            [
	            'name' 			=> 'Management',
	            'theme_color'	=> 'skin-red',
                'is_superadmin' => false,
                'is_default'    => false,
        	],

        	[
	            'name' 			=> 'Dept. Head',
	            'theme_color'	=> 'skin-red',
                'is_superadmin' => false,
                'is_default'    => false,
        	],

        	[
	            'name' 			=> 'Section Head',
	            'theme_color'	=> 'skin-red',
                'is_superadmin' => false,
                'is_default'    => false,
        	],
            
            [
	            'name' 			=> 'Staff',
	            'theme_color'	=> 'skin-red',
                'is_superadmin' => false,
	            'is_default'	=> true,
        	],
            
        ];
        Privilege::insert($privilege);
    }
}
