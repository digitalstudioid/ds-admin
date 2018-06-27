<?php

use Illuminate\Database\Seeder;
use App\User;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new User();
	    $users->name = 'Rudi Amirudin';
	    $users->email = 'rudi.amirudin@gmail.com';
	    $users->password = bcrypt('123456');
	    $users->save();
    }
}
