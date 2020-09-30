<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\subject;
use App\Models\instructor;
use App\Models\room;
use App\Models\course;


class session extends Model
{


    public function subject(){
        return $this->belongsTo('App\Models\subject','subject_id');
    }


}
