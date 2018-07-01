<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'sys_application';

    protected $casts = [
        'api_debug_mode' => 'boolean',
    ];

    protected $fillable = [
        'name, logo, favicon, api_debug_mode',
    ];

    /*
    protected $hidden = [
        'fieldname',
    ];
    */
}
