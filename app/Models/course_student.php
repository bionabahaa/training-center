<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course_student extends Model
{
    public function course(){

        return $this->belongsTo('App\Models\course_student','course_id');
    }


    public function student(){

        return $this->belongsTo('App\Models\course_student','student_id');
    }

}
