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

        $this->call(users::class);

        $this->call(mrr_building::class);
        $this->call(mrr_meeting_room::class);

        $this->call(sys_modules::class);
    }
}
