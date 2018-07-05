<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivilegeRole extends Model
{
    protected $table = 'sys_privileges_roles';

    protected $casts = [
        'is_visible, is_create, is_edit, is_delete, is_print, is_export' => 'boolean',
    ];
    
    protected $fillable = [
        'id_sys_privileges, id_sys_modules, is_visible, is_create, is_edit, is_delete, is_print, is_export',
    ];

    /*
    protected $hidden = [
        'fieldname',
    ];
    */

    public function sys_privileges()
    {
        return $this->belongsTo('App\Privilege', 'id_sys_privileges');
    }

    public function sys_modules()
    {
        return $this->belongsTo('App\Module', 'id_sys_modules');
    }
}
