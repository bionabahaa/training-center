<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function course()
    {
        return $this->hasMany('App\Models\course');
    }

    protected $fillable = ['en_title','ar_title','en_name','ar_name','image'];
}
