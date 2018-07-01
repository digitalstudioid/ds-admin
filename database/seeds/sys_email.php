<?php

use Illuminate\Database\Seeder;
use App\Email;

class sys_email extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Email::insert([
        	'mail_sender'	=> 'admin@digitalstudio.id',
        	'mail_driver'	=> 'sendmail',
        	'mail_host'		=> 'mail.digitalstudio.id',
        	'mail_port'		=> '25',
        	'mail_username'	=> 'admin@digitalstudio.id',
        	'mail_password'	=> '123456',
        ]);
    }
}
