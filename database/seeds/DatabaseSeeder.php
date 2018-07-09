<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call([
            users::class,

            sys_application::class,
            sys_email::class,

            sys_modules::class,
            sys_privileges::class,
            sys_privileges_roles::class,
            
            mrr_building::class,
            mrr_meeting_room::class,
        ]);
    }
}
