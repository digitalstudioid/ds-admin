<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'sys_email';

    protected $fillable = [
        'mail_sender, mail_driver, mail_host, mail_port, mail_username, mail_password',
    ];

    /*
    protected $hidden = [
        'fieldname',
    ];
    */
}
