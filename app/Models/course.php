<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\instructor;
use App\Models\Categories;

class course extends Model
{
    public function Categories(){
        return $this->belongsTo('App\Models\Categories','category_id');
    }


    public function instructor(){
        return $this->belongsTo('App\Models\instructor','instructor_id');
    }



}
