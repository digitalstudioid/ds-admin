<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingRoom extends Model
{
    protected $table = 'mrr_meeting_room';
    
    protected $fillable = [
        'name',
    ];

    /*
    protected $hidden = [
        'fieldname',
    ];
    */

    public function mrr_building()
    {
        return $this->belongsTo('App\Building', 'id_mrr_building');
    }
}
