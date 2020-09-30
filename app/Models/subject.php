<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\course;
use App\Models\instructor;
use App\Models\room;

class subject extends Model
{
    public function course(){
        return $this->belongsTo('App\Models\course','course_id');
    }
     public function instructor(){
        return $this->belongsTo('App\Models\instructor','instructor_id');
    }

    public function room(){
        return $this->belongsTo('App\Models\room','room_id');
    }
}
