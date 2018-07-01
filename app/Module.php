<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'sys_modules';

    protected $casts = [
        'is_active' => 'boolean',
    ];
    
    protected $fillable = [
        'parent_id, name, description, icon, path, sorting, is_active',
    ];

    /*
    protected $hidden = [
        'fieldname',
    ];
    */
}
