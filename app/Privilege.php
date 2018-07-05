<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $table = 'sys_privileges';

    protected $casts = [
        'is_superadmin, is_default, is_active' => 'boolean',
    ];
    
    protected $fillable = [
        'name, theme_color, is_superadmin, is_default, is_active',
    ];

    /*
    protected $hidden = [
        'fieldname',
    ];
    */

    public function sys_privileges_roles()
    {
      return $this->hasMany('App\PrivilegeRole');
    }
}
