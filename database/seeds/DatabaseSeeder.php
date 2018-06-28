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
            
            mrr_building::class,
            mrr_meeting_room::class,

            sys_modules::class,
        ]);
    }
}
