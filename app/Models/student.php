<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\course;

class student extends Model
{
    public function course(){

        return $this->belongsTo('App\Models\course','course_id');
    }

    protected $fillable = ['en_fname','mobile','email','course_id'];

}
