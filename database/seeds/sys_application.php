<?php

use Illuminate\Database\Seeder;
use App\Application;

class sys_application extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::insert([
        	'name'				=> 'Meeting Room Reservation',
        	'logo'				=> 'Logo.jpg',
        	'favicon'			=> 'Favicon.ico',
        	'api_debug_mode'	=> true,
        ]);
    }
}
