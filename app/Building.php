<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'mrr_building';

    protected $fillable = [
        'name',
    ];

    /*
    protected $hidden = [
        'fieldname',
    ];
    */

    public function mrr_meeting_room()
    {
      return $this->hasMany('App\MeetingRoom');
    }
}
